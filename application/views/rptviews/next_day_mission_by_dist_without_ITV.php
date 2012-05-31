<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<div class="container">
    <h2>Total Missions of next days by Distributor without ITV Assignment</h2>
    <hr/>
    <form class="well" action="" method="post">
        <input id="dateFrom" name="dateFrom" placeholder="RSD From..." /> <input id="dateTo" name="dateTo"  placeholder="RSD To..." /><br/>
        <button type="submit" class="btn btn-primary"> Search </button>
    </form>
    <?php if (isset($missiondata)) { ?> 
        <table class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <?php foreach ($missiondata[0] as $key => $value) { ?>
                        <th><?php echo $key; ?></th>
                    <?php } ?>
                        <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach ($missiondata as $mission) { ?>

                    <tr>
                        <?php $total = 0; foreach ($mission as $key => $value) { ?>

                            <td name="<?php $total +=$value; echo $key; ?>"><?php echo $value; ?></td>

                        <?php } ?>
                            <td name="total"><?php echo $total; ?></td>
                    </tr>
                    
                <?php } ?>
                    <tr>
                    <td>Total</td>
                    <?php
                    foreach ($missiondata[0] as $key => $value) {
                        if ($key != "Client Name") {
                            ?>
                            <td id="total_<?php echo $key; ?>"></td>
            <?php }
        } ?>   
                    <td id="grand_total"></td>        
                    </tr>
            </tbody>
        </table>
    <?php } ?>


</div>

<script type="text/javascript">
    
    $(document).ready(function(){
            <?php
        foreach ($missiondata[0] as $key => $value) {
            if ($key != "Client Name") {
                ?>
        $('#total_<?php echo $key; ?>').text(calcTotal('<?php echo $key ; ?> '));
         <?php }
        } ?> 
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