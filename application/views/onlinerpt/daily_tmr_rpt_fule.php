<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>


<h2>Daily TMR Report Fuel</h2>
<hr/>
<table id="rpt_table" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" >
    <thead>
        <tr>
            <th>TMR No.</th>
            <th>RSD</th>
            <th>Client Name</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>ALD </th>
            <th>Mission Status as per OPS</th>
            <th>Escort</th>
            <th>Seal Number</th>
            <th>Fuel Quantity Uploaded</th>
            <th>Fuel Type</th>
            <th>Fuel Downloaded</th>
            <th>Download Date(ADD)</th>
            <th>Final shortage(calc)</th>
            <th>Driver name</th>
            <th>Truck no.</th>
            <th>Driver Tazkira</th>
            <th>GDMS No.</th>
            <th>Current location</th>
            <th>Mission Status Reason</th>
            <th>USC Remarks 2</th>
            <th>Type of cargo</th>
            
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<script type="text/javascript">
$(document).ready(function() {
        $('#rpt_table').dataTable( {
            "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
            "bProcessing": true,
            "bServerSide"    : true,
            "sAjaxSource"    : "<?php echo site_url('rptman_async/daily_tmr_rpt_fule')    ?>",
            "fnServerData": function ( sSource, aoData, fnCallback ) {
                $.ajax( {
                    "dataType": 'json',
                    "type": "POST",
                    "url": sSource,
                    "data": aoData,
                    "success":fnCallback
                });
            } 
        });
        
})

</script>




<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>