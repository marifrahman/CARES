<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<h2>List of remission with memo</h2>
<hr/>

<table id="rpt_table" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" >
    <thead>
        <tr>
            <th>RLD</th>
            <th>TMR No.</th>
            <th>Previous TMR no.</th>
            <th>Remission to TMR</th>
            <th>GDMS no.</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Actual Arrival at Origin (AAAO)</th>
            <th>Actual Arrival at Destination (AAAD)</th>
            <th>Date Uploaded (ALD)</th>
            <th>Date Downloaded (ADD)</th>
            <th>Mission Status as per OPS</th>
            <th>Mission Status Reason</th>
            <th>Escort</th>
            <th>Type of Cargo</th>
            <th>Client Name</th>

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
            "sAjaxSource"    : "<?php echo site_url('rptman_async/list_of_remission_with_memo') ?>",
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