<!DOCTYPE html>
<html lang="en" class="no-js" <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title(''); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse bg-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                            <i class="fa fa-asterisk"></i> <?php bloginfo('name'); ?>
                        </a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <?php wp_list_pages('title_li='); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">