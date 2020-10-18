<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Wordstrap Theme</title>    
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    </head> 

    <body>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                        );
                    ?>

                    <form method="get" class="navbar-form navbar-right" role="search" action="<?php echo esc_url( home_url ( '/' ) ); ?>">
                        <label for="navbar-search" class="sr-only"><?php _e( 'Search', 'textdomain' ); ?></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="s" id="navbar-search">
                            <button type="submit" type="btn btn-default"><?php _e( 'Search', 'textdomain' ); ?></button>
                        </div>
                    </form><!-- / .navbar-form navbar-right -->

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav><!-- / .navbar navbar-default -->