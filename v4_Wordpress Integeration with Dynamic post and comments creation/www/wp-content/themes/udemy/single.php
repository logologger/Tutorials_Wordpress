<?php get_header() ?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <?php get_sidebar() ?>




    </div>

    <section id="blog" class="section">
        <div class="container">
            <div class="row">
                <section id="blog-posts" class="col-sm-8">
                    <?php

                    if(have_posts()){
                        while(have_posts()){
                            the_post();

                            ?>
                            <b><a href="<?php the_permalink(); ?>"><?php the_title();?></a></b>
                            <p><?php the_content(); ?></p>
                            <?php wp_link_pages(array(
                                'before'  => '<p class="text-center">'.__( 'Pages'),
                                'after'   => '</p>'
                            )) ?>
                            <p><?php the_tags();?></p>
                            <div class="date">

                                <?php the_time('d M') ?>
                            </div>


                            <?php
                        }
                    }


                    ?>
                    <li>
                    <?php

                    previous_posts_link('%link','<b>Back</b> %title');
                    ?>
                    </li>
                    <li>

                    <?php
                    next_post_link('<b>Next</b>');
                    ?>
                    </li>







                </section>


            </div>
        </div>

    </section>


</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <?php get_footer() ?>

</div>
<!-- /.container -->

<?php wp_footer() ?>

</body>

</html>
