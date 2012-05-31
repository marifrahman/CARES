<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Total Active Missions w.r.t. Distributor & Suits</h2>
    <hr/>

    <?php if (isset($missiondata)) { ?> 
        <table class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <?php foreach ($missiondata[0] as $key => $value) { ?>
                        <th><?php echo $key; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($missiondata as $mission) { ?>

                    <tr>
                        <?php foreach ($mission as $key => $value) { ?>

                        <td><?php echo $value; //echo ($key != "Client Name")?anchor('next_day_by_dist_without_vendor_details/1/3',$value): $value; ?></td>

                        <?php } ?>

                    </tr>

                <?php } ?>

            </tbody>
        </table>
    <?php } ?>
    
    

</div>

<script type="text/javascript">
    
    $(document).ready(function(){

        $('#total_unbilled').text(calcTotal('unbilled'));
        $('#total_closed').text(calcTotal('closed'));
        $('#total_cancelled_half').text(calcTotal('cancelled_half'));
        $('#total_cancelled').text(calcTotal('cancelled'));
        $('#grand_total').text(calcTotal('total'));


    })
    function calcTotal(tdname)
    {
        var total = 0;
        $('td[name='+tdname+']').each(function(index){
            total += parseInt($(this).text());
        });

        return total;
    }
</script>




<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>