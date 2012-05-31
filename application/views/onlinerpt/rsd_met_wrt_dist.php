<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>RSD Met w.r.t. Distributor</h2>
    <hr/>

    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Total missions for RSD</th>
                <th>ITVs pinging</th>
                <th>ITVs not pinging</th>
                <th>In cooldown area</th>
                <th>Not In cooldown area</th>
                <th>RSD met</th>
                <th>RSD Not met</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clossed_mission_data as $mission) { ?>

                <tr>
                    <td><?php echo $mission["client_name"]; ?></td>
                    <td name="rsd_today"><?php echo $mission["rsd_today"]; ?></td>
                    <td name="itv_pinging"><?php echo $mission["itv_pinging"]; ?></td>
                    <td name="itv_not_pinging"><?php echo $mission["itv_not_pinging"]; ?></td>
                    <td name="in_cooldown"><?php echo $mission["in_cooldown"]; ?></td>
                    <td name="not_in_cooldown"><?php echo $mission["not_in_cooldown"]; ?></td>
                    <td name="rsd_met"><?php echo $mission["rsd_met"]; ?></td>
                    <td name="rsd_not_met"><?php echo $mission["rsd_not_met"]; ?></td>
                </tr>

            <?php } ?>
            <tr >
                <td >Total</td>
                <td id="total_rsd_today" ></td>
                <td id="total_itv_pinging" ></td>
                <td id="total_itv_not_pinging" ></td>
                <td id="total_in_cooldown" ></td>
                <td id="total_not_in_cooldown" ></td>
                <td id="total_rsd_met"></td>
                <td id="total_rsd_not_met" ></td>

            </tr>
        </tbody>
    </table>


</div>

<script type="text/javascript">
    
    $(document).ready(function(){

        $('#total_rsd_today').text(calcTotal('rsd_today'));
        $('#total_itv_pinging').text(calcTotal('itv_pinging'));
        $('#total_cancelled_half').text(calcTotal('itv_pinging'));
        $('#total_itv_not_pinging').text(calcTotal('itv_not_pinging'));
        $('#total_in_cooldown').text(calcTotal('in_cooldown'));
        $('#total_not_in_cooldown').text(calcTotal('not_in_cooldown'));
        $('#total_rsd_met').text(calcTotal('rsd_met'));
        $('#total_rsd_not_met').text(calcTotal('rsd_not_met'));


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