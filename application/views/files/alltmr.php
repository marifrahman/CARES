<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<h2>List of all Transportation Movement Requests(TMR)</h2>
<hr/>

<table id="tbl_alltmr" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" >
    <thead>
        <tr>
            <th>TMR no.</th>
            <th>GDMS no.</th>
            <th>Remission To TMR</th>
            <th>Ping status</th>
            <th>RSD</th>
            <th>Mission Status as per Ops</th>
            <th>Container No.</th>
            <th>Driver Name</th>
            <th>Driver Tazkira No.</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

    </tbody>
</table>




<!--<section>
    <div class="row ">
        <div class="span11 well">

            <table class="table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <th>TMR No.</th>
                        <th>GDMS No.</th>
                        <th>Ping status</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>
</section>-->
<script type="text/javascript">
$(document).ready(function() {
        $('#tbl_alltmr').dataTable( {
            "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
            "bProcessing": true,
            "bServerSide"    : true,
            "sAjaxSource"    : "<?php echo site_url('filecontroller/load_ajax_alltmr')    ?>",
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