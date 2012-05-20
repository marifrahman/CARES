<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>

<h2>Change user Info</h2>
<hr/>



<?php
$username = array(
    'name' => 'username',
    'id' => 'username',
    'size' => 50,
    'disabled' => true,
    'value' => $user->username,
    'class' => 'medium'
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'value' => '',
    'class' => 'medium'
);

$confirm_password = array(
    'name' => 'confirm_password',
    'id' => 'confirm_password',
    'size' => 30,
    'value' => '',
    'class' => 'medium'
);

$email = array(
    'name' => 'email',
    'id' => 'email',
    'maxlength' => 80,
    'size' => 50,
    'value' => $user->email,
    'class' => 'large'
);
$employee_id = array(
    'name' => 'employee_id',
    'id' => 'employee_id',
    'maxlength' => 10,
    'size' => 10,
    'value' => set_value('employee_id'),
    'class' => 'medium'
);
?>
<?php if (isset($successmsg)) { ?>
<div class="alert alert-success" style="text-align:center; ">
        <a class="close" data-dismiss="alert">×</a>
        <h4>Success! </h4>
        <?php echo $successmsg; ?>
    </div>
<?php } ?>
<?php if (isset($errormsg)) { ?>
<div class="alert alert-error" style="text-align:center; ">
        <a class="close" data-dismiss="alert">×</a>
        <h4>Error! </h4>
        <?php echo $errormsg; ?>
    </div>
<?php } ?>



<form class="well" action="<?php echo site_url('auth/change_user_info' . '/' . $user->id); ?>" method="post" >


    <?php //echo form_label('Username', $username['id']);  ?>
    <?php //echo form_input($username) ?>
    <?php //echo "<font style='color:red;'>" . form_error($username['name']) . "</font>"; ?>

    <?php echo form_label('Password', $password['id']); ?>
    <?php echo form_password($password) ?>
    <?php echo form_error($password['name'], "<span style='color:red;'>", "</span>"); ?>

    <?php echo form_label('Confirm Password', $confirm_password['id']); ?>
    <?php echo form_password($confirm_password); ?>
    <?php echo form_error($confirm_password['name'], "<span style='color:red;'>", "</span>"); ?>

    <?php // echo form_label('Email Address', $email['id']);  ?>
    <?php //echo form_input($email); ?>
    <?php //echo "<font style='color:red;'>" . form_error($email['name']) . "</font>"; ?>

    <?php //echo form_label('Employee Id.', $employee_id['id']);  ?>
    <?php //echo form_input($employee_id); ?>
    <?php //echo "<font style='color:red;'>" . form_error($employee_id['name']) . "</font>"; ?>


    <br/>
    <button class="btn btn-primary btn-large" type="submit" value="submit" name="submit" id="submit" >
        Reset password
    </button>
    <!--<div class="box grid_8 round_all">
        <div class="block">
            <label>Photo</label>
            <div class="input_group">
                <input name="userfile" id="userfile" title="Upload your photograph" type="file">
            </div>
            <label>User role</label>  
            <div class="input_group ">
                <select title="Role of the user to define the access right" id="user_role" name="user_role" >
    <?php //foreach($roles as $role) {  ?> 
                    <option value="4" <?php //(strcasecmp(trim($role->name), trim($user_province)) == 0 ) ? 'selected' : '';  ?>  >
    <?php //echo $role->name;  ?>  
                    </option>
    <?php //}  ?>
                </select>
            </div>

            <label>Province</label>  
            <div class="input_group ">
                <select title="User's region" id="user_region" name="user_region" >

    <?php //foreach ($provincelist as $province) {  ?>
                        <option value="<?php //echo $province['province_name'];  ?>">
    <?php //echo $province['province_name'];  ?>
                        </option>
    <?php //};  ?>
                </select>
            </div>
        </div>
    </div>-->

    <!--<div class="box grid_8 round_all">
        
    </div>-->

</form>
<script type="text/javascript">
    //var subs_name = new LiveValidation('username');
    //subs_name.add( Validate.Presence );

    var subs_pwd = new LiveValidation('password');
    subs_pwd.add( Validate.Presence);
    
    
    var confirm_password = new LiveValidation('confirm_password');
    confirm_password.add( Validate.Presence);
    confirm_password.add( Validate.Confirmation, { match: 'password' } );
    
    //var email = new LiveValidation('email');
    //email.add( Validate.Presence );
    //email.add( Validate.Email );
    
    //var employee_id = new LiveValidation('employee_id');
    //employee_id.add( Validate.Presence);
    //employee_id.add( Validate.Numericality, { onlyInteger: true } );
    

</script>
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/document_close'); ?>