<?php
/**
 * Template Name: Signup
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<style>
.form-horizontal .control-group select {
    height: 30px;
    width: 100%;
}
</style>
<div id="content" class="site-content">

	<div class="container ">

		<div class="content-left-wrap row">

			<div id="primary" class="content-area">
				<main id="main" class="site-main col-md-12" role="main">
					<div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title text-center">Registration</div>
                        </div>
                        <div class="panel-body" style="padding-top: 30px;">
                                <div id="tab2_login" class="tab_content_login" style="display:block;">
                                <?php
                                    if($_GET['action'] == 'register' && $_GET['failed'] == 'empty' ){
                                        echo '<div id="login_error">
                                                <strong>ERROR</strong>: User Information empty.<br>
                                             </div>';
                                    }elseif($_GET['action'] == 'register' && $_GET['failed'] == 'username_exists' ){
                                        echo '<div id="login_error">
                                                <strong>ERROR</strong>: This username is already registered. Please choose another one.<br>
                                             </div>';
                                    }elseif($_GET['action'] == 'register' && $_GET['failed'] == 'email_exists' ){
                                        echo '<div id="login_error">
                                                <strong>ERROR</strong>: This email is already registered, please choose another one.<br>
                                             </div>';
                                    }/*elseif($_GET['action'] == 'register' && $_GET['register'] == true ){
                                        echo '<div id="login_error">
                                                <h3 class="text-center">Register Successfully!</h3><br>
                                             </div>';
                                    }*/

                                ?>
                                <?php $register = $_GET['register']; if($register == true) { echo '<p>Register Successfully. Check your email for the password!</p>'; } ?>
                                <form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
                                    <div class="username">
                                        <label for="user_login"><?php _e('Username'); ?>: </label>
                                        <input type="text" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="101" />
                                    </div>

                                    <div class="email">
                                        <label for="user_email"><?php _e('Your Email'); ?>: </label>
                                        <input type="text" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" size="25" id="user_email" tabindex="102" />
                                    </div>

                                    <div class="login_fields">
                                        <?php do_action('register_form'); ?>
                                        <input type="submit" name="user-submit" value="<?php _e('Sign up!'); ?>" class="user-submit" tabindex="103" />

                                        <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
                                        <input type="hidden" name="user-cookie" value="1" />
                                    </div>
                                </form>
                            </div>
                       </div>
                    </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>