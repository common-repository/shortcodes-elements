<div class="wrap elw-page-welcome about-wrap seting-page">

    <div class="row col-md-12 settings">
        <div class=" col-md-4">
            <div class="col-md-6">
                <?php
					echo '<img src="' . plugins_url( 'images/logo.png', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
				?>
            </div>
        </div>

        <div class=" col-md-4">
            <h2><span class="elw_shortcode_heading"><?php esc_html_e('Settings Page', 'selements' ); ?></span></h2>
        </div>

        <div class=" col-md-4">
            <div class="get_link-cont">
                <a class="get_link" href="https://weblizar.com/blog/create-google-map-api-key-step-step/" target="_blank"><i class="far fa-hand-point-right"></i><span>  <?php esc_html_e('Create Google Maps API Key', 'selements' ); ?></span></a>

            </div>
        </div>

        <?php if( isset($_POST['x_submit']) ) {
			$data = array(
            'google_api'  => sanitize_text_field( $_POST['google_api'] ), 
			);
			//entering data into options table
			update_option( 'google_api', $data );
		}
		function register_my_cool_plugin_settings() {
			//register our settings
			register_setting( 'google_api' );
		}
		$db_values = get_option( 'google_api' );
		if($db_values) {
			 $google_api = $db_values['google_api'] ? $db_values['google_api'] : '';
		}
		?>
            <div class="col-md-12">
                <form class="form_shortcodes" method="POST" action="#">
                    <label>Google API key for Google Maps Shortcodes </label>
                    <input id='google_api' name='google_api' class="form-control" size='40' type='text' value="<?php if(isset($db_values['google_api'] )) { echo esc_attr($google_api); }else { $google_api=""; }  ?>" />
                    <input type="submit" class="form-control sub" name="x_submit" value="Save API Key">
                </form>
            </div>

            </header>
            <!-- Header -->
            <div class="col-md-12  product-main-cont">
        <ul class="nav nav-tabs product-tbs">
            <li class="nav-item "><a class="nav-link active" data-toggle="tab" href="#themesd"><?php esc_html_e('Themes', 'selements' ); ?> </a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pluginsd"><?php esc_html_e('Plugins', 'selements' ); ?></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#offers"><?php esc_html_e('Offers', 'selements' ); ?></a></li>
        </ul>

        <div class="tab-content">
            <div id="themesd" class="tab-pane in active">
                <div class="space theme active">

                    <div class=" p_head theme">
                        <h1 class="section-title"><?php esc_html_e('WordPress Themes', 'selements' ); ?></h1>

                    </div>

                    <div class="row p_plugin blog_gallery">
                        <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                            <div class="img-thumbnail">

                                <?php
						echo '<img src="' . plugins_url( 'images/2.png', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                            <div class="row p-box">
                                <h2><a href=""><?php esc_html_e('Eatos - Restaurant Theme', 'selements' ); ?></a></h2>
                                <p><strong><?php esc_html_e('Tags:', 'selements' ); ?> </strong><?php esc_html_e('Customize Front Page, Multilingual, Complete Documentation, Theme Option Panel, Unlimited Color Skins, Multiple Background Patterns, Multiple Theme Templates, 5 Portfolio Layout, 3 Page Layout and many more.', 'selements' ); ?></p>
                                <div>
                                    <p><strong><?php esc_html_e('Description:', 'selements' ); ?> </strong> <?php esc_html_e('You can use this multipurpose WordPress theme is flexible enough to let you build a website of your imagination effortlessly..', 'selements' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                            <div class="price">
                                <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                                <span class="price-number"><?php esc_html_e('$', 'selements' ); ?><span><?php esc_html_e('11', 'selements' ); ?></span></span>
                            </div>
                            <div class="btn-group-vertical">
                                <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/eatos-premium-restaurant-theme/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                                <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/eatos-premium-restaurant-theme/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="row p_plugin blog_gallery">
                        <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                            <div class="img-thumbnail">
                                <?php
						echo '<img src="' . plugins_url( 'images/1.png', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                            <div class="row p-box">
                                <h2><a href=""><?php esc_html_e('Nineteen Premium Theme', 'selements' ); ?> </a></h2>
                                <p><strong><?php esc_html_e('Tags:', 'selements' ); ?> </strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, dark, real estate, shop, restaurant, ele…', 'selements' ); ?></p>
                                <div>
                                    <p><strong><?php esc_html_e('Description:', 'selements' ); ?> </strong> <?php esc_html_e('Creative agencies, financial advisors, business development institutions, investment centers and other local business foundations can make the best out of Nineteen Premium template.', 'selements' ); ?> </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                            <div class="price">
                                <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                                <span class="price-number"><?php esc_html_e('$', 'selements' ); ?><span><?php esc_html_e('20', 'selements' ); ?></span></span>
                            </div>
                            <div class="btn-group-vertical">
                                <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/nineteen-premium-theme-for-business/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                                <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/nineteen-premium-theme-for-business/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="row p_plugin blog_gallery">
                        <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                            <div class="img-thumbnail">
                                <?php
						echo '<img src="' . plugins_url( 'images/explora.jpg', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                            <div class="row p-box">
                                <h2><a href=""><?php esc_html_e('Explora- Ultimate Multi-Purpose WordPress Theme', 'selements' ); ?></a></h2>
                                <p><strong><?php esc_html_e('Tags:', 'selements' ); ?> </strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant, ele…', 'selements' ); ?></p>
                                <div>
                                    <p><strong><?php esc_html_e('Description:', 'selements' ); ?> </strong> <?php esc_html_e('Explora Premium is a multi-purpose responsive theme coded & designed with a lot of care and love. You can use it for your business, portfolio, blogging or any type of site. ', 'selements' ); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                            <div class="price">
                                <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                                <span class="price-number"><?php esc_html_e('$', 'selements' ); ?><span><?php esc_html_e('25', 'selements' ); ?></span></span>
                            </div>
                            <div class="btn-group-vertical">
                                <a class="btn btn-primary btn-lg" href="https://weblizar.com/explora-premium/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                                <a class="btn btn-success btn-lg" href="https://weblizar.com/explora-premium/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="row p_plugin blog_gallery">
                        <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                            <div class="img-thumbnail">
                                <?php
						echo '<img src="' . plugins_url( 'images/Guardian.jpg', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                            <div class="row p-box">
                                <h2><a href=""><?php esc_html_e('Guardian- Corporate Business Theme', 'selements' ); ?></a></h2>
                                <p><strong><?php esc_html_e('Tags: ', 'selements' ); ?></strong><?php esc_html_e('Multiple Background Patterns, Rich color changer, Boxed/wide layout styles, Additional Page, WPML & Woo Commerce.', 'selements' ); ?></p>
                                <div>
                                    <p><strong><?php esc_html_e('Description: ', 'selements' ); ?></strong> <?php esc_html_e('Guardian Premium Theme is a super professional one page WordPress theme for modern businesses. Ideal for creative agencies, startups, small businesses, and freelancers and best of all it is so easy to use that you can have your website up in minutes.', 'selements' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                            <div class="price">
                                <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                                <span class="price-number"><?php esc_html_e('$', 'selements' ); ?><span><?php esc_html_e('39', 'selements' ); ?></span></span>
                            </div>
                            <div class="btn-group-vertical">
                                <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/guardian-premium-theme/"><?php esc_html_e('Detail', 'selements' ); ?></a>
                                <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/guardian-premium-theme/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="row p_plugin blog_gallery">
                        <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                            <div class="img-thumbnail">
                                <?php
						echo '<img src="' . plugins_url( 'images/Enigma.jpg', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                            <div class="row p-box">
                                <h2><a href=""><?php esc_html_e('Enigma- Modern & Clean Designed Multi-Purpose WordPress Theme', 'selements' ); ?></a></h2>
                                <p><strong><?php esc_html_e('Tags: ', 'selements' ); ?></strong><?php esc_html_e('clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant.', 'selements' ); ?></p>
                                <div>
                                    <p><strong><?php esc_html_e('Description: ', 'selements' ); ?></strong><?php esc_html_e(' Enigma is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page also present.', 'selements' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                            <div class="price">
                                <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                                <span class="price-number"><?php esc_html_e('$', 'selements' ); ?><span><?php esc_html_e('39', 'selements' ); ?></span></span>
                            </div>
                            <div class="btn-group-vertical">
                                <a class="btn btn-primary btn-lg" href="https://weblizar.com/themes/enigma-premium/"><?php esc_html_e('Detail', 'selements' ); ?></a>
                                <a class="btn btn-success btn-lg" href="https://weblizar.com/themes/enigma-premium/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!----Plugin----->

            <div id="pluginsd" class="tab-pane fade">
                <div class="p_head theme">

                    <h1 class="section-title"><?php esc_html_e('WordPress Plugins', 'selements' ); ?></h1>

                </div>
                <div class="row p_plugin blog_gallery">
                    <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                        <div class="img-thumbnail">
                            <?php
						echo '<img src="' . plugins_url( 'images/Clockin-Pro.jpg', __FILE__ ) . '" class="img-responsive" alt="Clockin"/> ';
					?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                        <div class="row p-box">
                            <h2><a href=""><?php esc_html_e('Clockin Portal Pro', 'selements' ); ?></a></h2>
                            <p><strong><?php esc_html_e('Features: ', 'selements' ); ?></strong>
                                <ul>
                                    <li><?php esc_html_e('Set Your TimeZone', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Salary status (Monthly or Hourly)', 'selements' ); ?></li>
                                    <li><?php esc_html_e('IP Restriction', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Shift Management', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Holiday Listing', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Leave Management Module', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Event Management Module....etc many more.', 'selements' ); ?></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                        <div class="price">
                            <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                            <span class="price-number"><span><?php esc_html_e('$14', 'selements' ); ?></span></span>
                        </div>
                        <div class="btn-group-vertical">
                            <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/clockin-pro-plugin/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                            <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/clockin-pro-plugin/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                        </div>
                    </div>
                </div>

                <div class="row p_plugin blog_gallery">
                    <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                        <div class="img-thumbnail">
                            <?php
						echo '<img src="' . plugins_url( 'images/school.jpg', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                        <div class="row p-box">
                            <h2><a href=""><?php esc_html_e('School Manaegment WordPress Plugin', 'selements' ); ?></a></h2>
                            <p><strong><?php esc_html_e('Features: ', 'selements' ); ?></strong>
                                <ul>
                                    <li><?php esc_html_e('Class & Sections [ Subjects - Study Material - Attendance]', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Fee Generation', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Expense Management', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Income Management', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Exams - Time Table', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Much more.', 'selements' ); ?></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                        <div class="price">
                            <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                            <span class="price-number"><span><?php esc_html_e('$15', 'selements' ); ?></span></span>
                        </div>
                        <div class="btn-group-vertical">
                            <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/school-management/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                            <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/school-management/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="row p_plugin blog_gallery">
                    <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                        <div class="img-thumbnail">
                            <?php
						echo '<img src="' . plugins_url( 'images/hrm.jpg', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                        <div class="row p-box">
                            <h2><a href=""><?php esc_html_e('Employee And HR Management WordPress Plugin', 'selements' ); ?></a></h2>
                            <p><strong><?php esc_html_e('Features: ', 'selements' ); ?></strong>
                                <ul>
                                    <li><?php esc_html_e('Admin Centralized Dashboard', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Department & Designation Management', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Shifts Management', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Staff Management', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Generate Attandance Reports', 'selements' ); ?></li>
                                   
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                        <div class="price">
                            <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                            <span class="price-number"><span><?php esc_html_e('$19', 'selements' ); ?></span></span>
                        </div>
                        <div class="btn-group-vertical">
                            <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/employee-and-hr-management-wordpress-plugin/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                            <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/employee-and-hr-management-wordpress-plugin/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="row p_plugin blog_gallery">
                    <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                        <div class="img-thumbnail">
                            <?php
						echo '<img src="' . plugins_url( 'images/Multi_Institute_Preview.jpg', __FILE__ ) . '" class="img-responsive" alt="img"/> ';
					?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                        <div class="row p-box">
                            <h2><a href=""> <?php esc_html_e('Multi Institute Management', 'selements' ); ?></a></h2>
                            <p><strong><?php esc_html_e('Features: ', 'selements' ); ?></strong>
                                <ul>
                                    <li><?php esc_html_e('Student Manaegment', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Staff Manaegment', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Course Manaegment', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Invoice - ID - Certificate Printing', 'selements' ); ?></li>
                                    <li> <?php esc_html_e('Multiple Custom Fee', 'selements' ); ?></li>
                                    <li><?php esc_html_e('Paypal - Razorpay supported', 'selements' ); ?></li>
                                    
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                        <div class="price">
                            <span class="currency"><?php esc_html_e('USD', 'selements' ); ?></span>
                            <span class="price-number"><span><?php esc_html_e('$35', 'selements' ); ?></span></span>
                        </div>
                        <div class="btn-group-vertical">
                            <a target="_blank" class="btn btn-primary btn-lg" href="https://weblizar.com/plugins/multi-institute-management/"><?php esc_html_e('Demo', 'selements' ); ?></a>
                            <a class="btn btn-success btn-lg" href="https://weblizar.com/plugins/multi-institute-management/"><?php esc_html_e('Buy Now', 'selements' ); ?></a>
                        </div>
                    </div>
                </div>

               

                
               

            </div>

            <!--offers-->
            <div id="offers" class="tab-pane fade">
                <div class=" p_head theme">
                    <h1 class="section-title"><?php esc_html_e('Weblizar Offers', 'selements' ); ?></h1>

                </div>

                <div class="row p_plugin blog_gallery">
                    <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
                        <div class="img-thumbnail">
						<a class="btn btn-primary title_offers" href="https://weblizar.com/offers/">
                            <?php
									echo '<img src="' . plugins_url( 'images/offer.jpg', __FILE__ ) . '" class="img-responsive" alt="offer"/> ';
								?></a>

                        </div>

                    </div>
                    
                </div>

            </div>
        </div>

            <style>
            .div#pluginsd {
                opacity: 1 !important;
            }
			.title_offers {color: #f5f1f1;}
			.col-md-12.settings{
				padding:0px;
			}
			.settings .product-main-cont {
				margin: 0 auto;
				float: none;
				clear: both;
			}
			
			
                .about-wrap .p_plugin_desc h2 {
                    margin: 15px -2px 0.6em;
                    font-size: 26px;
                }
                
                .row.p-box li {
                    color: #888;
                }
                
                .form_shortcodes {
					text-align: center;
					padding: 30px;
					margin-bottom: 40px;
					background-color: #eff4f8;
					border-bottom: 2px solid #00a0d2;
					margin-top: 15px;
				}
                
                .product-tbs.nav-tabs>li {
                    float: left;
                    text-align: center;
                    margin-bottom: -1px;
                    width: 33%;
                }
                
                .form_shortcodes input {
                    border-radius: 0px;
                    height: 45px;
                }
                
                input#google_api {
                    border-radius: 0px;
                    height: 45px;
                }
                
                .row.p-box {
                    display: block;
                }
                
                .p_plugin {
                    width: 100%;
                }
                
                .about-wrap img {
                    background-color: #ffffff!important;
                }
                
                .about-wrap h2 {
                    margin: 40px 0 .6em;
                    font-size: 2em;
                    line-height: 1.3;
                    text-align: left;
                }
                
                .about-wrap h1 {
					margin:0;
                    padding: 30px 0;
                    text-align: center;
                    font-weight: bold;
                    text-shadow: 2px 2px #ccc;
                    font-size: 2.9em;
                    /* font-weight: 400; */
                }
                
                .row.p-box ul {
                    margin-left: 30px;
                }
                
                .row.p-box li {
                    list-style: initial;
                    padding: 4px;
                }
                
                .p_plugin_desc p {
                    font-size: 16px;
                    letter-spacing: 0.2px;
                    line-height: 25px;
                    color: #6d6d6d;
                }
                
                .get_link-cont {
                    margin-top: 43px;
                }
            </style>