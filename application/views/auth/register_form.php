<?php $this->load->view('includes/document_head'); ?>
<?php $this->load->view('includes/header'); ?>
<h2>Create new user</h2>
<hr/>
<?php
$username = array(
    'name' => 'username',
    'id' => 'username',
    'size' => 50,
    'value' => set_value('username'),
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
    'value' => set_value('email'),
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

$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha'
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

    <form class="well" method="post" action="">
        <?php echo form_label('Username', $username['id']); ?>
        <?php echo form_input($username) ?>
        <?php echo form_error($username['name'], "<span style='color:red'>", "</span>"); ?>

        <?php echo form_label('Password', $password['id']); ?>
        <?php echo form_password($password) ?>
        <?php echo form_error($password['name'], "<span style='color:red'>", "</span>"); ?>

        <?php echo form_label('Confirm Password', $confirm_password['id']); ?>
        <?php echo form_password($confirm_password); ?>
        <?php echo form_error($confirm_password['name'], "<span style='color:red'>", "</span>"); ?>

        <?php echo form_label('Email Address', $email['id']); ?>
        <?php echo form_input($email); ?>
        <?php echo form_error($email['name'], "<span style='color:red'>", "</span>"); ?>

        <?php //echo form_label('Employee Id.', $employee_id['id']); ?>
        <?php //echo form_input($employee_id); ?>
        <?php //echo form_error($employee_id['name'], "<span style='color:red'>", "</span>"); ?>



        <!--<label>Photo</label>
            <input name="userfile" id="userfile" title="Upload your photograph" type="file">-->
        <label>User role</label>  
        <select title="Role of the user to define the access right" id="user_role" name="user_role" >

            <option value="3">
                Ops Level 1  
            </option>
             <option value="4">
                Ops Level 2  
            </option>
             <option value="5">
                Ops Level 3  
            </option>
             <option value="7">
                Finance Level 1  
            </option>
             <option value="8">
                Finance Level 2  
            </option>
             <option value="9">
                Finance Level 3  
            </option>
             <option value="10">
                Finance Level 4  
            </option>
            <option value="2">
                Admin   
            </option>

        </select>

        <!--<label>Province</label>  
            <select title="User's region" id="user_region" name="user_region" >

        <?php //foreach ($provincelist as $province) { ?>
                    <option value="<?php //echo $province['province_name'];  ?>">
        <?php //echo $province['province_name']; ?>
                    </option>
        <?php //}; ?>
            </select>-->
        <br/>
        <button class="btn btn-primary btn-large" type="submit" value="submit" name="submit" id="submit" >
             Create user   
        </button>
    </form>


    <script type="text/javascript">
        var subs_name = new LiveValidation('username');
        subs_name.add( Validate.Presence );
        subs_name.add(Validate.Format,{pattern: / /i,negate:true, failureMessage:'Blank space is not allowed !'} );
    
        var subs_pwd = new LiveValidation('password');
        subs_pwd.add( Validate.Presence);
    
    
        var confirm_password = new LiveValidation('confirm_password');
        confirm_password.add( Validate.Presence);
        confirm_password.add( Validate.Confirmation, { match: 'password' } );
    
        var email = new LiveValidation('email');
        email.add( Validate.Presence );
        email.add( Validate.Email );
    
        var employee_id = new LiveValidation('employee_id');
        employee_id.add( Validate.Presence);
        employee_id.add( Validate.Numericality, { onlyInteger: true } );
    


    </script>
    <?php $this->load->view('includes/footer'); ?>
    <?php $this->load->view('includes/document_close'); ?>