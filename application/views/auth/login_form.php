<?php $this->load->view('includes/document_head_login.php'); ?>
<?php
$username = array(
    'name' => 'username',
    'id' => 'username',
    'size' => 30,
    'value' => set_value('username'),
    'class' => 'text-input'
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'class' => 'text-input'
);

$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
    'style' => 'margin:0;padding:0'
);

$confirmation_code = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8
);
?>


<body id="login">

    <div id="login-wrapper" class="png_bg">

        <div id="login-top" align="center">

            <h1>USC-CARES Admin</h1>
            <!-- Logo (221px width) -->
            <!--<img id="logo" src="<?php //echo base_url('resources/images/logo.png');  ?>" style="z-index:10;" alt="Simpla Admin logo" />-->
        </div> <!-- End #logn-top -->

        <div id="login-content" align="center" >

            <div id="login-box" >
                <img id="logo" src="<?php echo base_url('resources/images/logo.png'); ?>" style="padding:15px 15px 45px 15px  "  alt="Simpla Admin logo" />
                <?php echo form_open(site_url("auth/login")); ?>

                <?php
                $error = $this->dx_auth->get_auth_error();
                
                if ($error) {
                    ?>
                    <div class="notification error png_bg">
                        <div>
                            <?php echo $error ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if (isset($msg)) { ?>
                    <div class="notification information png_bg">
                        <div>
                            <?php //echo $msg  ?>
                        </div>
                    </div>
                <?php } ?>
                <p>
                    <label>Username</label>
                    <?php echo form_input($username) ?><br/>
                    <?php echo form_error($username['name']); ?>

                </p>
                <div class="clear"></div>
                <p>
                    <label>Password</label>
                    <?php echo form_password($password) ?><br/>
                    <?php echo form_error($password['name']); ?>
                </p>
                <!--<div class="clear"></div>-->
                 <!--<p id="remember-password">
                   <input type="checkbox" />Remember me
                </p>-->
                <div class="clear"></div>
                <p>
                    <input class="button" type="submit" value="Sign In" />
                </p>

                <?php echo form_close() ?>
            </div>
        </div> <!-- End #login-content -->

    </div> <!-- End #login-wrapper -->

    <script type="text/javascript"> 
        //var username = new LiveValidation('username');
        //username.add( Validate.Presence );
        //var password = new LiveValidation('password');
        //password.add( Validate.Presence );
    </script>  
    <?php $this->load->view('includes/document_close.php'); ?>