<?php get_header(); ?>

<body>
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

   <?php get_footer(); ?>
</div>
</body>

</html>
