<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="assets/images/logo.png"  style="max-height:60px;border-radius:50%"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
    <div class="sidebar-user-info">
        <?php //echo"<pre>cliente";print_r($_SESSION);echo"</pre>";?>
        <div class="sui-normal">
            <a href="#" class="user-link">
                <img src="<?php echo $this->crud_model->select_urls_user($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>" alt="" class="img-circle" style="height:44px;">

                <span><?php echo get_phrase('Bem Vindo !'); ?></span>
                <strong>
                    <?php
                    $cliente = "cliente";
                    //echo $this->db->get_where($this->session->userdata('login_type'), $cliente . '_id' =>
                        echo $_SESSION['name'];
                    ?>
                </strong>
            </a>
        </div>

        <div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->             
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_profile">
                <i class="entypo-pencil"></i>
                <?php echo get_phrase('edit_profile'); ?>
            </a>

            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_profile">
                <i class="entypo-lock"></i>
                <?php echo get_phrase('change_password'); ?>
            </a>

            <span class="close-sui-popup">×</span><!-- this is mandatory -->            
        </div>
    </div>


    <div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div> 
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?cliente/dashboard">
                <i class="fa fa-desktop"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- VIEW URLs -->
        <li class="<?php if ($page_name == 'manage_url') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?cliente/Visualizar_urls_user">
                <i class="fa fa-list-alt"></i>
                <span><?php echo get_phrase('Visualizar URLs'); ?></span>
            </a>
        </li>



    </ul>

</div>