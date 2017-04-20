<html>

<head>
    <title>
        Jayka-Indian Restaurant
    </title>
    <meta name='description' content='blog content'>
    <meta name='viewport' content='width=device-width,user-scalable=no,initial-scale=no,maximum-scale=1,minimum-scale=1'>
<!--    <link rel="stylesheet" href="wp-content/themes/Wp_blog/style.css" type="text/css" />-->
<!--    <!--<script src="jquery.js" type="text/javascript"/>-->
<?php wp_head() ?>
</head>

<body>
<div class="container">
    <header>
        <div id="logo-menu">Shahi Indian Restaurant</div>
        <input type="checkbox" id="btn-menu" />
        <label for="btn-menu"><img src="wp-content/themes/wp_blog_rajat/images/menu.png"></label>
        <div id="banner">
            <div id="banner-left">Indian Restaurant</div>
            <div id="banner-right-social">
                <ul>
                    <li>
                        <a href="#"><img src="wp-content/themes/wp_blog_rajat/images/social/facebook.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="wp-content/themes/wp_blog_rajat/images/social/twitter.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="wp-content/themes/wp_blog_rajat/images/social/instagram.png" /></a>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="<?php echo home_url('/') ?>">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Dishes</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <!--  <form action='' method='post' id='search-bar'>
             <input type="text" name='' id='search-text' placeholder="Enter Text" />
             <input type="submit" name='' id='search_button' />
         </form> -->
    </header>
    <div id="main">
        <?php

        if(have_posts()){
        while (have_posts()){

            the_post();



        ?>
        <div id="content">
            <article>
                <h1><?php the_title(); ?></h1>
                <div id="slider">

                    <?php


                    the_post_thumbnail('medium_large')

                    ?>
<!--                    <img src="--><?php // get_the_post_thumbnail_url() ?><!--" width="100%" height="45%">-->
<!--                </div>-->
                <p>
                    <?php

                   the_excerpt();


                    ?>
                    <a href="<?php echo the_permalink()?>"><img src="wp-content/themes/wp_blog_rajat/images/readmore.png" id="readmore"></a>
                </p>
            </article>
        </div>
            <?php


            }

        }
            ?>


    </div>

    <div class=''>
        <div id='head-tab'>
            Copyright @ 2017 by Indian Restaurant
        </div>
    </div>
</div>
</body>

</html>
