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

        .google-btn {
            margin-right: 25px;
            background: #518ef8;
            display: inline-flex;
            line-height: 25px;
            border: 2px solid #518ef8;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            font-family: roobert, sans-serif;
            color: aliceblue;
            padding: 20px 30px;
        }

        .email-btn {
            display: inline-flex;
            line-height: 25px;
            background: #fff;
            border: 2px solid #3c3c3c;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            padding: 20px 30px;
        }

        .new-tag {
            color: #F47574;
            cursor: pointer;
            background-color: transparent;
            border: 2px solid #F47574;
            border-radius: 50px;
        }

        #color-over {
            background-color: yellow;
        }

        .para-content {
            margin: 35px auto 60px;
            text-align: center;
            font-size: 20px;
            line-height: 25px;
        }

        .main-header-content {
            margin-top: 56px;
            color: #3c3c3c;
            position: relative;
            font-size: 50px;
            font-family: roobert, sans-serif;
            text-align: center;
        }

        .google-btn {
            margin-right: 25px;
            background: #518ef8;
            display: inline-flex;
            line-height: 25px;
            border: 2px solid #518ef8;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            font-family: roobert, sans-serif;
            color: aliceblue;
            padding: 20px 30px;
        }

        .getstarted-btn {
            font-size: 20px;
            margin-right: 25px;
            padding: 20px 30px;
            background-color: #F47574;
            border-color: #F47574;
            color: #fff;
            font-weight: bold;
            font-family: "Roobert", sans-serif;
            padding: 0 30px;
            border-radius: 40px;
            z-index: 8;
            height: 70px;
            line-height: 66px;
            width: 330px;
        }

        .newtext {
            margin-right: 25px;
            background: #fff;
            height: 50px;
            line-height: 50px;
            border: 2px solid #3c3c3c;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            font-family: roobert, sans-serif;
            color: aliceblue;
            padding: 20px 30px;
        }

        .greenbtn {
            border-color: #88c7a8;
            background: #88c7a8;
            color: #fff;
            margin-right: 25px;
            height: 70px;
            line-height: 50px;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            font-family: roobert, sans-serif;
            padding: 0px 30px;
        }

        .purplebtn {
            border-color: #645BC9;
            background: #645BC9;
            color: #fff;
            margin-right: 25px;
            height: 70px;
            line-height: 50px;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            font-family: roobert, sans-serif;
            padding: 0px 30px;
        }

        .email-btn {
            display: inline-flex;
            line-height: 25px;
            background: #fff;
            border: 2px solid #3c3c3c;
            border-radius: 35px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            font-size: 20px;
            padding: 20px 30px;
        }

        .text-container {
            text-align: center;
        }

        h1 {
            line-height: 72px;
            color: #3c3c3c;
            position: relative;
            font-size: 50px;
            font-weight: bold;
        }

        .column1 {
            max-width: 66.66%;
        }

        .column2 {
            max-width: 33.33%;
        }

        .dotted-border {
            height: 5px;
            background-image: linear-gradient(to right, #000 30%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 13px 3px;
            background-repeat: repeat-x;
        }

        .new-abc {
            font-size: 20px;
            line-height: 20px;
        }

        #p-3 {
            margin-top: 20px;
            font-size: 20px;
        }

        #p-4 {
            font-size: 20px;
        }

        .dotted-border {
            background: url(<?php echo get_template_directory_uri(); ?>/images/dotted-border.png) center center;
            background-size: cover;
            border: none;
            margin: 0;
            width: 100%;
            height: 2px;
            display: inline-block;
            vertical-align: middle;
        }


    </style>
    <header>
    <div class="container">
            <div class="container-fluid">
                <!-- <img src=<?php echo get_template_directory_uri(); ?>"/images/color-logo.png" width="150"> -->
                <img src=<?php echo get_template_directory_uri(); ?>'/images/color-logo.png' class="img-fluid" width="120" height="45">
        <!-- <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('smallest');?>" >
    <?php endif;?> -->
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

