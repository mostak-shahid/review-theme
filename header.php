<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo get_post_meta( get_the_ID(),'_yoast_wpseo_focuskw', true ) ?>">
    <meta name="description" content="<?php echo get_post_meta( get_the_ID(),'_yoast_wpseo_metadesc', true ) ?>">
    <meta name="author" content="Md. Mostak Shahid">  
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header-1">
        <div class="container-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo-area">
                            <h2><a class="logo" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name') ?></a></h2>
                            <h4><?php echo get_bloginfo('description') ?></h4>
                        </div>                        
                    </div>
                    <div class="col-md-6">
                        <div class="contact-area">
                            <div class="social">Social</div>
                            <div class="email">Email</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="header-nav">
                        <?php 
                        echo wp_nav_menu( array(
                            'menu'              => 'mainmenu',
                            'theme_location'    => 'mainmenu',
                            'container'         => 'nav',
                            'container_class'   => 'mosmenu',
                            'menu_class'        => 'mos-menu list-inline',
                            'echo'              => false 
                            )
                        ); 
                        ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search-form">
                            <?php echo get_search_form(); ?>                            
                        </div>                            
                    </div>
                </div>
            </div>
        </div>        
    </header>
    <?php if (!is_front_page()) : ?>
    <section id="section-title">
        <div class="container-wrap">
            <div class="container">
            <?php if (is_home()) : ?>                
                <span class="page-title">Blogs</span>
            <?php else: ?>
                <span class="page-title"><?php echo get_the_title(); ?></span>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
