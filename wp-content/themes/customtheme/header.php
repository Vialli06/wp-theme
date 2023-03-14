<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>


    <style>
        body{
            background-color:lightblue;
            margin: 20px;
        }

        a{
           font-size:20px;
           color: #3c3c3c;
           font-family: roobert,sans-serif;
           font-weight: bold;
           padding: 0 15px;
        }

        .navigation {
            display: flex;
            justify-content: flex-end;
            margin: 20px 0 200px 0;
        }

        .navigation li {
            margin: 0 10px;
            list-style: none;
        }

        h1 {
            color: #3c3c3c;
            position: relative;
            font-size: 55px;
            font-family: roobert,sans-serif;
            text-align: center;
        }


    </style>
    <header>
    <div class="container">
        <div class="row">
        <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('smallest');?>" >
    <?php endif;?>
        <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation'
        )
        );?>
    </div>
    
    </div>
    </header>
    </head>
    <body>

