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
                        <a href="#"><img src="../wp-content/themes/wp_blog_rajat/images/social/facebook.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../wp-content/themes/wp_blog_rajat/images/social/twitter.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../wp-content/themes/wp_blog_rajat/images/social/instagram.png" /></a>
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

        the_post(); //the_post is just like a iterator for the loop ..if it is not there
        //loop will run indefinately


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

                        the_content();

                        ?>
<!--                        <a href="#"><img src="../wp-content/themes/wp_blog_rajat/images/readmore.png" id="readmore"></a>-->
                   </p>
            </article>
            <?php
            //Get only the approved comments
            $postID=get_the_ID();
            $args = array(
                'status' => 'approve',
                'post_id' =>$postID
            );

            // The comment Query
            $comments_query = new WP_Comment_Query;

            $comments = $comments_query->query( $args );

            // Comment Loop
            if ( $comments ) {
                foreach ( $comments as $comment ) {
                    echo '<p>' . $comment->comment_content . '</p>';
                    echo '<b>' . $comment->comment_author . '</b>';
                }
            } else {
                echo 'No comments found.';
            }
            ?>
            <?php


            }

            }




            comment_form();
            ?>
        </div>
        <!--        <div id="content">-->
        <!--            <article>-->
        <!--                <h1>Butter Paneer</h1>-->
        <!--                <div id="slider">-->
        <!--                    <img src="wp-content/themes/wp_blog_rajat/images/slide3.jpg" width="100%" height="45%">-->
        <!--                </div>-->
        <!--                <p>-->
        <!--                    Paneer Butter Masala also known as Paneer Makhani is a vegetarian dish from India which is also popular in the west. The dish combines paneer (Indian cottage cheese) in a butter sauce quite similar to butter chicken. Fry paneer in ghee, or spray oil if desired and store in a bowl. Dice and sauté onions with oil in garlic and ginger paste until golden brown. Add diced capsicum and tomatoes. In a separate pan mix ghee, hing, cardamom, turmeric, garam masala, chilli powder, lemon juice, and cumin. Fry for 2 minutes, then add yoghurt. Cook on medium heat for five minutes. Add onions, diced capsicum, tomatoes, and paneer. Cook on low heat for 15 minutes occasionally stirring.-->
        <!--                    <a href="#"><img src="wp-content/themes/wp_blog_rajat/images/readmore.png" id="readmore"></a>-->
        <!--                </p>-->
        <!--            </article>-->
        <!--        </div>-->
    </div>
    <!-- <div class="side">
        <form action="" method="post">
            <input type="text" name="" id="search_text" />
            <input type="button" name="" id="search_button" />
        </form>
    </div> -->
    <div class=''>
        <div id='head-tab'>
            Copyright @ 2017 by Indian Restaurant
        </div>
    </div>
</div>
</body>

</html>
