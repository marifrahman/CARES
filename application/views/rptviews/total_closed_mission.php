<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Total Closed Mission</h2>
    <hr/>

    <table class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Type of Cargo</th>
                <th>Unbilled</th>
                <th>Closed</th>
                <th>Cancelled Half</th>
                <th>Cancelled No Pay</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clossed_mission_data as $mission) { ?>

                <tr>
                    <td><?php echo $mission["client_name"]; ?></td>
                    <td><?php echo $mission["cargo_type"]; ?></td>
                    <td name="unbilled"><?php echo $mission["unbilled"]; ?></td>
                    <td name="closed"><?php echo $mission["closed"]; ?></td>
                    <td name="cancelled_half"><?php echo $mission["cancelled_half"]; ?></td>
                    <td name="cancelled"><?php echo $mission["cancelled"]; ?></td>
                    <td name="total"><?php echo $mission["total"]; ?></td>
                </tr>

            <?php } ?>
            <tr >
                <td colspan ="2">Total</td>
                <td id="total_unbilled" ></td>
                <td id="total_closed" ></td>
                <td id="total_cancelled_half"></td>
                <td id="total_cancelled" ></td>
                <td id="grand_total" ></td>

            </tr>
        </tbody>
    </table>


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