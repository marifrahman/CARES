<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<h2>Daily collective ping report</h2>
<hr/>

<table id="rpt_table" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" >
    <thead>
        <tr>
            
            <th>TMR No.</th>
            <th>GDMS no.</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Escort</th>
            <th>Type of Cargo</th>
            <th>Vendor Name</th>
            <th>Vendor Phone no.</th>
            <th>Mission Status Reason</th>
            <th>Client Name</th>
            <th>Ping status</th>
            <th>Ping status reason</th>

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
            "sAjaxSource"    : "<?php echo site_url('rptman_async/daily_collective_ping_report')    ?>",
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