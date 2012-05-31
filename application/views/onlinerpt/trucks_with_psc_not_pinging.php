<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Trucks with PSC Escort Not pinging on the way</h2>
    <hr/>

    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Escort</th>
                <th>Pinging waiting for upload at Origin</th>
                <th>Not Pinging waiting for upload at Origin</th>
                <th>Pinging waiting for Local Escort</th>
                <th>Not Pinging waiting for Local Escort</th>
                <th>Pinging En routed to Destination</th>
                <th>Not Pinging Enrouted to Destination</th>
                <th>Pinging Awaiting for Download</th>
                <th>Not Pinging Awaiting for Download</th>
                <th>Total Active Missions with PSC Escort</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clossed_mission_data as $mission) { ?>

                <tr>
                    <td><?php echo $mission["client_name"]; ?></td>
                    <td><?php echo $mission["escort"]; ?></td>
                    <td name="pinging_awaiting_upload_at_origin"><?php echo $mission["pinging_awaiting_upload_at_origin"]; ?></td>
                    <td name="not_pinging_awaiting_upload_at_origin"><?php echo $mission["not_pinging_awaiting_upload_at_origin"]; ?></td>
                    <td name="pinging_waiting_local_escort"><?php echo $mission["pinging_waiting_local_escort"]; ?></td>
                    <td name="not_pinging_waiting_local_escort"><?php echo $mission["not_pinging_waiting_local_escort"]; ?></td>
                    <td name="pinging_enrouted_dest"><?php echo $mission["pinging_enrouted_dest"]; ?></td>
                    <td name="not_pinging_enrouted_dest"><?php echo $mission["not_pinging_enrouted_dest"]; ?></td>
                    <td name="pinging_awaiting_down"><?php echo $mission["pinging_awaiting_down"]; ?></td>
                    <td name="not_pinging_awaiting_down"><?php echo $mission["not_pinging_awaiting_down"]; ?></td>
                    <td name="total"><?php echo $mission["total"]; ?></td>
                </tr>

            <?php } ?>
            <tr >
                <td colspan ="2">Total</td>
                <td id="total_pinging_awaiting_upload_at_origin" ></td>
                <td id="total_not_pinging_awaiting_upload_at_origin" ></td>
                <td id="total_pinging_waiting_local_escort"></td>
                <td id="total_not_pinging_waiting_local_escort" ></td>
                <td id="total_pinging_enrouted_dest" ></td>
                <td id="total_not_pinging_enrouted_dest" ></td>
                <td id="total_pinging_awaiting_down" ></td>
                <td id="total_not_pinging_awaiting_down" ></td>
                <td id="grand_total" ></td>

            </tr>
        </tbody>
    </table>


</div>

<script type="text/javascript">
    
    $(document).ready(function(){

        $('#total_pinging_awaiting_upload_at_origin').text(calcTotal('pinging_awaiting_upload_at_origin'));
        $('#total_not_pinging_awaiting_upload_at_origin').text(calcTotal('not_pinging_awaiting_upload_at_origin'));
        $('#total_pinging_waiting_local_escort').text(calcTotal('pinging_waiting_local_escort'));
        $('#total_not_pinging_waiting_local_escort').text(calcTotal('not_pinging_waiting_local_escort'));
        $('#total_pinging_enrouted_dest').text(calcTotal('pinging_enrouted_dest'));
        $('#total_not_pinging_enrouted_dest').text(calcTotal('not_pinging_enrouted_dest'));
        $('#total_pinging_awaiting_down').text(calcTotal('pinging_awaiting_down'));
        $('#total_not_pinging_awaiting_down').text(calcTotal('not_pinging_awaiting_down'));
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