<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Missions awaiting usg escort</h2>
    <hr/>

    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Escort</th>
                <th>Awaiting for upload at Origin</th>
                <th>Awaiting for Military escort </th>
                <th>Enrouted to Destination </th>
                <th>Awaiting for Download</th>
                <th>Total Active Missions with Military Escort</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clossed_mission_data as $mission) { ?>

                <tr>
                    <td><?php echo $mission["client_name"]; ?></td>
                    <td><?php echo $mission["escort"]; ?></td>
                    <td name="awaiting_upload_at_origin"><?php echo $mission["awaiting_upload_at_origin"]; ?></td>
                    <td name="awaiting_military_escort"><?php echo $mission["awaiting_military_escort"]; ?></td>
                    <td name="enrouted_to_destination"><?php echo $mission["enrouted_to_destination"]; ?></td>
                    <td name="awaiting_download"><?php echo $mission["awaiting_download"]; ?></td>
                    <td name="total"><?php echo $mission["total"]; ?></td>
                </tr>

            <?php } ?>
            <tr >
                <td colspan ="2">Total</td>
                <td id="total_awaiting_upload_at_origin" ></td>
                <td id="total_awaiting_military_escort" ></td>
                <td id="total_enrouted_to_destination"></td>
                <td id="total_awaiting_download" ></td>
                <td id="grand_total" ></td>

            </tr>
        </tbody>
    </table>


</div>

<script type="text/javascript">
    
    $(document).ready(function(){

        $('#total_awaiting_upload_at_origin').text(calcTotal('awaiting_upload_at_origin'));
        $('#total_awaiting_military_escort').text(calcTotal('awaiting_military_escort'));
        $('#total_enrouted_to_destination').text(calcTotal('enrouted_to_destination'));
        $('#total_awaiting_download').text(calcTotal('awaiting_download'));
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