<!DOCTYPE html>
<html lang="en" class="no-js" <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title(''); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no" />
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css" rel="stylesheet">

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
    </head>
    <body>
        <header>


            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <?php wp_list_pages('title_li='); ?>
                        </ul>
                    </div>
                </div>
</nav>
        </header>
        <div class="container">