<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<h2>ARDD Report</h2>
<hr/>

<table id="rpt_table" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" >
    <thead>
        <tr>
            <th>Required Load Date (RLD)</th>
            <th>TMR No.</th>
            <th>GDMS no.</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Actual Arrival at Origin (AAAO)</th>
            <th>Actual Arrival at Destination (AAAD)</th>
            <th>Date Uploaded (ALD)</th>

            <th>Mission Status Reason</th>
            <th>Escort</th>
            <th>RDD</th>
            <th>ARDD</th>
            <th>Owner Name</th>
            <th>ITV Ping Status</th>
            <th>USC Remark 2</th>
            

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
            'aoColumns': [ 
                { "mDataProp": "rld" },
                { "mDataProp": "tmr_no" },
                { "mDataProp": "gdms_no"},
                { "mDataProp": "origin"},
                { "mDataProp": "destination"},
                { "mDataProp": "aaao"},
                { "mDataProp": "aaad"},
                { "mDataProp": "ald"},
                { "mDataProp": "mission_status_reason"},
                { "mDataProp": "escort"},
                { "mDataProp": "rdd"},
                { "mDataProp": "ardd"},
                { "mDataProp": "client_name"},
                { "mDataProp": "ping_status"},
                { "mDataProp": "usc_remark_2"},
            ],
            "bProcessing": true,
            "bServerSide"    : true,
            "sAjaxSource"    : "<?php echo site_url('rptman_async/ardd_report') ?>",
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