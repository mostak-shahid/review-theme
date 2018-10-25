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
                            <h2>Logo</h2>
                            <h4>Slogan</h4>
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
                    <div class="col-md-9">Menu</div>
                    <div class="col-md-3">Search</div>
                </div>
            </div>
        </div>        
    </header>