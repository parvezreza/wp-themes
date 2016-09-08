<?php
/**
 * Template Name: Login
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="container container-bg">

		<div class="content-left-wrap row">

			<div id="primary" class="content-area">

				<main id="main" class="site-main text-center front-login" role="main">
				    <?php
                      $user_info = wp_get_current_user();
                      $user_id = $user_info->ID;
                    /* if ( is_user_logged_in() ){
                         $user = new WP_User( $user_id );
                        if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
                            foreach ( $user->roles as $role )
                                $role;
                        }
                        if($role =="controller"){
                            wp_redirect( home_url('/controller-profile') ); exit;
                        }elseif($role =="operator"){
                            wp_redirect( home_url('/operator-profile') ); exit;
                        }else{
                             wp_redirect( home_url() ); exit;
                        }
                     }*/
                    ?>
					<?php
					    if(@$_GET['login'] == 'failed'){
					        echo "<h4>Login failed. Please enter correct information.</h4>";
					    }
						//if ( ! is_user_logged_in() ) { // Display WordPress login form:
                            $args = array(
                                'redirect' => admin_url(),
                                'form_id' => 'loginform-custom',
                                'redirect'       => site_url('/'),
                                'label_username' => __( 'Email' ),
                                'label_password' => __( 'Password' ),
                                'label_remember' => __( 'Remember Me' ),
                                'label_log_in' => __( 'Login >>' ),
                                'remember' => false
                            );
                            wp_login_form( $args );
                        /*} else { // If logged in:
                            wp_loginout( home_url() ); // Display "Log Out" link.
                            echo " | ";
                            wp_register('', ''); // Display "Site Admin" link.
                        }*/

					?>
                    <?php do_action( 'wordpress_social_login' ); ?>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>