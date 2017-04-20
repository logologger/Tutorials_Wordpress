<?php

    function ju_theme_opts_page(){

        $theme_opts = get_option('ju_opts');

        ?>

        <div class="wrap">

            <div class="panel panel-success">

                <div class="panel-heading">
                    <div class="panel-title">
                        <?php _e('Udemy Theme Settings','udemy');?>
                    </div>
                </div>
                <div class="panel-body">

                    <?php



                    if(isset($_GET['status']) && $_GET['status']==1){
                        ?>

                        <div class="alert alert-success">Success</div>

                        <?php
                    }

                    ?>
                    <form action="admin-post.php" method="post">
                        <input type="hidden" value="ju_save_options" name="action"/>
                        <?php wp_nonce_field('ju_options_verify'); ?>

                        <h4>
                            <?php _e('Social Icons','udemy'); ?>
                        </h4>
                            <div class="form-group">
                                <label>
                                    <?php
                                        _e('Twitter','udemy');

                                    ?>
                                   <input type="text" class="form-control" name="ju_inputTwitter" value="<?php echo $theme_opts['twitter']?>"/>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <?php
                                    _e('Facebook','udemy');

                                    ?>
                                    <input type="text" class="form-control" name="ju_inputFacebook"/>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <?php
                                    _e('Youtube','udemy');

                                    ?>
                                    <input type="text" class="form-control" name="ju_inputYoutube"/>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <?php
                                    _e('Twitter','Logo Type');

                                    ?>
                                </label>
                                    <select class="form-control" name="ju_LogoType">
                                        <option value="1">
                                            <?php _e('Site Name','udemy');?>
                                        </option>
                                        <option value="2">
                                            <?php _e('Image','udemy');?>

                                        </option>
                                    </select>
                            </div>

                                <div class="input-group">
                                    <input class="form-control" placeholder="Logo Image" name="ju_LogoImg"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" id="ju_uploadLogoImgBtn"><?php _e('Upload','udemy');?></button>
                                    </span>

                                </div>

                        <div class="input-group">
                            <h3>Footer Text</h3>
                            <label >Footer</label>
                            <input type="text" class="form-control" name="ju_FooterText"/>


                        </div>
                        <div class="input-group">

                        <input type="submit" class="btn btn-primary" value="Update"/>
                        </div>


                    </form>
                </div>
            </div>
        </div>

<?php
    }

?>