<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

        <h1 id="sidebar-title"><a href="#">USC- CARES</a></h1>

        <!-- Logo (221px wide) -->
        <a href="#"><img id="logo" src="<?php echo base_url('resources/images/logo.png'); ?>" alt="Simpla Admin logo" /></a>

        <!-- Sidebar Profile links -->
        <div id="profile-links">
            Hello, <a href="#" title="Edit your profile"><?php echo $this->dx_auth->get_username(); ?></a>| <a href="<?php echo site_url('auth/logout'); ?>" title="Sign Out">Sign Out</a><br />
            You are loged in as <a href="#" title="User group"> <?php echo $this->dx_auth->get_role_name(); ?></a><br/><br/><br/>
        </div>        

        <ul id="main-nav">  <!-- Accordion Menu -->

            <li>
                <a href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Dashboard
                </a>       
            </li>

            <li> 
                <a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
                    Files
                </a>
                <ul>
                    <li><a class="current" href="<?php echo site_url('filecontroller'); ?>">Create a new File</a></li>
                    <li><a  href="#">Manage File</a></li> <!-- Add class "current" to sub menu items also -->
                    <li><a href="#">Manage Comments</a></li>
                    <li><a href="#">Manage Categories</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-top-item">
                    Lists
                </a>
                <ul>
                    <li><a href="#">Create a new list</a></li>
                    <li><a href="#">View all list</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-top-item">
                    Users
                </a>
                <ul>
                    <li><a href="#">Create a new user</a></li>
                    <li><a href="#">View all users</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item">
                    Settings
                </a>
                <ul>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Your Profile</a></li>
                    <li><a href="#">Users and Permissions</a></li>
                </ul>
            </li>      

        </ul> <!-- End #main-nav -->

    </div>
</div> <!-- End #sidebar -->