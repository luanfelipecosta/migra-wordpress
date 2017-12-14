 <!DOCTYPE html>
<html style="margin-top:0px !important;" lang="en">
    <head>
        <title>CommPlusNet - 3302-9544</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!--================= Include All CSS ==================-->
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/all.css"/>
        
        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
        <!-- Favicon Icon -->
        
        <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
    
        <!-- Box Start -->
        <div class="box_container">
        <!-- Box Start -->
        
        <!--================= Header Section ==================-->
        <header class="header-area ">
            <div class="headerTriangle"></div>
            <div class="logo-img">
                <a href="http://commplusnet.com.br/" style="text-transform: none;">CommPlusNet</a>
            </div>
            <div class="heading">
                <h1>
                    Communications 
                    &#38; Computers
                </h1>
                <p>A company with a vision of C&#38;C convergency</p>
            </div>
            <div class="menuButtonArea hidden-lg hidden-md">
                <a class="menuToggle" href="#"></a>
            </div>
            <nav class="menu">
                <?php wp_nav_menu(array(
                     'theme_location'  => 'primary',
                     'container_class' => '',
                     'container'       => 'nav',
                     'menu_class'      =>  false,
                 )); 
                ?>
            </nav>
        </header>
                
        <div class="inerPageheader innerInHome">
            <div class="inner-logo">
                <a href="http://commplusnet.com.br/">CommPlusNet</a>
            </div>
            <div class="inner-heading">
                <h3 style="font-size:26px; height:60px;"><a href="http://commplusnet.com.br/">Communications <span>&#38; Computers</span></a></h3>
            </div>
            <div class="menuButtonArea hidden-lg hidden-md">
                <a class="menuToggle" href="#"></a>
            </div>
           
                <?php wp_nav_menu(array(
                     'theme_location'  => 'primary',
                     'container_class' => 'inner-nav',
                     'container'       => 'nav',
                     'menu_class'      =>  false,
                 )); 
                ?> 
            
            <div class="clearfix"></div>
        </div>
