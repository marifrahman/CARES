<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>


    
                <?php
                // Show reset password message if exist 
                if (isset($reset_message))
                    echo $reset_message;
                ?>
            <?php
            // Show error
            echo validation_errors();

            echo form_open($this->uri->uri_string());
            ?>
            <!--<div class="box grid_16 round_all">
                <div class="block">
                    <label>Bulk Action :
                        <div class="input_group ">
                            <select title="Select the checkbox(s) from the following list and chose the action to take." id="usr_bulk_action" name="usr_bulk_action">
                                <option value="noaction">
                                        No action   
                                </option>
                                <option value="ban">
                                        Ban user(s)   
                                </option>
                                <option value="unban">
                                        Unban user(s)   
                                </option>
                                <option value="resent_pass">
                                        Reset password   
                                </option>
                            </select>
                        </div>
                    </label>
                </div>
            </div>-->
            <h2>List of all users</h2>
            <hr/>
            <table id="tbl_viewalluser" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" > 
                    <thead> 
                        <tr> 
                            <th>Username</th> 
                            <th>Email</th> 
                            <th>Role</th> 
                            <th>Is Locked</th> 
                            <th>Last IP</th> 
                            <th>Last login</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                    </tbody> 
                </table>
          
            <?php
            echo form_close();
            ?>


<script type="text/javascript">
    
   
    function lockUser(user_id)
    {
        if (confirm ("Do you really want to Lock the user: "+user_id+" ?"))
        {
            loadURL = '<?php echo site_url("backend/lock_user"); ?>/'+user_id;
            $.post(  
            loadURL,  
            {language: "php", version: 5},  
            update_row,  
            "html"  
        ); 
            
            
        }
        return false;
    }
    function update_row(responseData)
    {
        /*
        if(responseData=="error")
        {
            alert("Opps, Something din work !!");
        }
        else
        {
            oTable = $('#tbl_viewallsaf').dataTable();
            var row = $('#del_id_'+responseData).closest("tr").get(0);
            oTable.fnDeleteRow(oTable.fnGetPosition(row));
        }
         */
    }
    
    $(document).ready(function(){
        
      $('#tbl_viewalluser').dataTable( {
            "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page"
            },
            "bProcessing": true,
            "bServerSide"    : true,
            "sAjaxSource"    : "<?php echo site_url('backend/loadUser') ?>",
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
    
       
    
    });//end of document ready
    
    
</script>
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>