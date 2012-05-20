<body data-offset="50" data-target=".subnav" data-spy="scroll" data-twttr-rendered="true">

<!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url(); ?>">CARES: Customer Activity REcording System</a>

            <p class="navbar-text pull-right">Welcome ! <strong> <a href="<?php echo  site_url('auth/change_user_info/'.$this->dx_auth->get_user_id()); ?>"><?php echo $this->dx_auth->get_username(); ?></a></strong>.You are logged in as <strong><?php echo $this->dx_auth->get_role_name(); ?></strong>  | <a href="<?php echo site_url('auth/logout'); ?>">sign out</a></p>
        </div>
    </div>
</div>


<!-- start of main container -->
<div class="container">
    <?php $this->load->view('includes/top_menubar'); ?>

