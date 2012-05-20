<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>
<script type="text/javascript" src="<?php echo base_url('resources/scripts/pivot.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/scripts/jquery_pivot.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/scripts/accounting.min.js'); ?>"></script>



    
  <div class="container">
    <h1>Report: Total Closed Mission</h1>
    
    
    <div class="subnav">
      <ul class="nav nav-pills">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Filter Fields
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu stop-propagation" style="overflow:auto;max-height:450px;padding:10px;">
            <div id="filter-list"></div>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Row Label Fields
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu stop-propagation" style="overflow:auto;max-height:450px;padding:10px;">
            <div id="row-label-fields"></div>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Column Label Fields
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu stop-propagation" style="overflow:auto;max-height:450px;padding:10px;">
            <div id="column-label-fields"></div>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Summary Fields
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu stop-propagation" style="overflow:auto;max-height:450px;padding:10px;">
            <div id="summary-fields"></div>
          </ul>
        </li>
        <li class="dropdown pull-right">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Canned Reports
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
           <li><a id="ar-aged-balance" href="#">AR Aged Balance</a></li>
           <li><a id="acme-detail-report" href="#">Acme Corp Detail</a></li>
           <li><a id="miami-invoice-detail" href="#">Miami Invoice Detail</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <hr/>

    <h1>Results</h1>
    <span id="pivot-detail"></span>

    <hr/>
    <div id="results"></div>
  </div>


<script type="text/javascript">

function ageBucket(row, field){
  var age = Math.abs(((new Date().getTime()) - row[field.dataSource])/1000/60/60/24);
  switch (true){
    case (age < 31):
      return '000 - 030'
    case (age < 61):
      return '031 - 060'
    case (age < 91):
      return '061 - 090'
    case (age < 121):
      return '091 - 120'
    default:
      return '121+'
  }
};

// Define the structure of fields, if this is not defined then all fields will be assumed
// to be strings.  Name must match csv header row (which must exist) in order to parse correctly.
var fields = [
    // filterable fields
    {name: 'last_name',         type: 'string', filterable: true, filterType: 'regexp'},
    {name: 'first_name',        type: 'string', filterable: true},
    {name: 'state',             type: 'string', filterable: true},
    {name: 'employer',          type: 'string', filterable: true},
    {name: 'city',              type: 'string', filterable: true},
    {name: 'invoice_date',      type: 'date',   filterable: true},

    // psuedo fields
    {name: 'invoice_mm', type: 'string', filterable: true, pseudo: true,
      pseudoFunction: function(row){
          var date = new Date(row.invoice_date);
          return pivot.utils().padLeft((date.getMonth() + 1),2,'0')}
    },
    {name: 'invoice_yyyy_mm', type: 'string', filterable: true, pseudo: true,
      pseudoFunction: function(row){
        var date = new Date(row.invoice_date);
        return date.getFullYear() + '_' + pivot.utils().padLeft((date.getMonth() + 1),2,'0')}
    },
    {name: 'invoice_yyyy', type: 'string', filterable: true, pseudo: true, columnLabelable: true,
      pseudoFunction: function(row){ return new Date(row.invoice_date).getFullYear() }},
    {name: 'age_bucket', type: 'string', filterable: true, columnLabelable: true, pseudo: true, dataSource: 'last_payment_date', pseudoFunction: ageBucket},


    // summary fields
    {name: 'billed_amount',     type: 'float',  rowLabelable: false, summarizable: 'sum', displayFunction: function(value){ return accounting.formatMoney(value)}},
    {name: 'payment_amount',    type: 'float',  rowLabelable: false, summarizable: 'sum', displayFunction: function(value){ return accounting.formatMoney(value)}},
    {name: 'balance', type: 'float', rowLabelable: false, pseudo: true,
      pseudoFunction: function(row){ return row.billed_amount - row.payment_amount },
      summarizable: 'sum', displayFunction: function(value){ return accounting.formatMoney(value)}},
    {name: 'last_payment_date',  type: 'date',  filterable: true}
]

  function setupPivot(input){
    input.callbacks = {afterUpdateResults: function(){
      $('#results > table').dataTable({
        "sDom": "<'row'<'span6'l><'span6'f>>t<'row'<'span6'i><'span6'p>>",
        "iDisplayLength": 50,
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "sPaginationType": "bootstrap",
        "oLanguage": {
          "sLengthMenu": "_MENU_ records per page"
        }
      });
    }};
    $('#pivot-demo').pivot_display('setup', input);
  };

  $(document).ready(function() {

    setupPivot({url:"<?php echo base_url('resources/lib/csv/demo.csv'); ?>", fields: fields, filters: {employer: 'Acme Corp'}, rowLabels:["city"], summaries:["billed_amount", "payment_amount"]})

    // prevent dropdown from closing after selection
    $('.stop-propagation').click(function(event){
      event.stopPropagation();
    });

    // **Sexy** In your console type pivot.config() to view your current internal structure (the full initialize object).  Pass it to setup and you have a canned report.
    $('#ar-aged-balance').click(function(event){
      $('#pivot-demo').pivot_display('reprocess_display', {rowLabels:["employer"], columnLabels:["age_bucket"], summaries:["balance"]})
    });

    $('#acme-detail-report').click(function(event){
      $('#pivot-demo').pivot_display('reprocess_display', {filters:{"employer":"Acme Corp"},rowLabels:["city","last_name","first_name","state","invoice_date"]})
    });

    $('#miami-invoice-detail').click(function(event){
      $('#pivot-demo').pivot_display('reprocess_display', {"filters":{"city":"Miami"},"rowLabels":["last_name","first_name","employer","invoice_date"],"summaries":["payment_amount"]})
    });
  });
</script>


<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>