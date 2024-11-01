<script>
jQuery(document).ready(function($){
	//select shortcode File
	$(".els-admin-shortcodes-single-back").css("display", "none");

	$(".mainpage_shortcode").click(function WLselect() {
	var shortcodeSelectVal = jQuery(this).attr('data-name');
	var shortcodeSelectText = jQuery(this).attr('data-shortcode');
	if( shortcodeSelectVal != 'default'){ 
    $('.option-page').load('<?php echo plugin_dir_url( __FILE__ ) ?>shortcodes/'+shortcodeSelectVal+'.php',
	function WLselect(){
	$(".els-admin-shortcodes-single-back").css("display", "block"); 
	$(".shortcode-editor-back").css("display", "inline-block");
	$(".option-page").css("display", "block");
	$(".seting-page").css("display", "none");
	$('.shortcode-editor-title').text(' - '+shortcodeSelectText);
		});
	  }
	})
// Go Back button
    $(".shortcode-editor-back").click(function WLselect() {
    $(".seting-page").css("display", "block");
    $(".els-admin-shortcodes-single-back").css("display", "none");
    $(".option-page").css("display", "none");
			})
	.trigger('change');
 });
</script>
<div class="wrap elw-page-welcome about-wrap seting-page">
		<h1><?php esc_html_e("Welcome to","selements"); ?> <span class="elw_shortcode_heading">Shortcodes Elements</span></h1>
		<div class="about-text"><?php esc_html_e("Congratulations! You are about to use most powerful time saver Plugin for WordPress ever","selements"); ?> - <span style="color:#00a0d2;"><b><?php esc_html_e('Shortcodes elements','selements' ); ?></b></span> <?php esc_html_e('by Weblizar.','selements' ); ?>	</div>
		<!-- <div class="wp-badge elw-page-logo" style="color:#0072aa;">Version 1.1.0	</div> -->
		
		<!-- Isotope -->
	<section>
    <div class="gallary animate-grid">
        <div class="containerr">
			<!-- <div class="row"> -->
				<div class="col-xs-12">
					<div class="categories">
						<ul class="nav nav-tabs" >							
							<li class="nav-item" ><a class="nav-link" href="#" data-filter="*" class="active"><?php esc_html_e("All Shortcodes","selements"); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="#" data-filter=".els_content"><?php esc_html_e("Content","selements"); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="#" data-filter=".els_box"><?php esc_html_e("Box","selements"); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="#" data-filter=".els_media"><?php esc_html_e("Media","selements"); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="#" data-filter=".els_gallery"><?php esc_html_e("Gallery","selements"); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="#" data-filter=".els_other"><?php esc_html_e("Other","selements"); ?></a></li>				
						</ul>
						<div class="clearfix">  </div>
					</div>
				</div>
			<!-- </div> -->
	        <div class="row gallary-thumbs">
	            <div class="col-sm-6 col-md-1 els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="heading" data-shortcode="Heading">
							<img src="<?php echo plugins_url('/images/shortcodes/heading.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Heading','selements' ); ?></h4>
								<div class="clearfix"></div>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="accordion" data-shortcode="Accordion">
							<img src="<?php echo plugins_url('/images/shortcodes/accordion.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Accordion','selements' ); ?></h4>		
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_box els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="tabs" data-shortcode="Tabs">
							<img src="<?php echo plugins_url('/images/shortcodes/tabs.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Tabs','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="dropcap" data-shortcode="Dropcap">
							<img src="<?php echo plugins_url('/images/shortcodes/dropcap.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Dropcap','selements' ); ?></h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="columns" data-shortcode="Columns">
							<img src="<?php echo plugins_url('/images/shortcodes/row.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Columns','selements' ); ?></h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="posts" data-shortcode="Posts">
							<img src="<?php echo plugins_url('/images/shortcodes/posts.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Posts','selements' ); ?></h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_box els_content">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="button" data-shortcode="Button">
							<img src="<?php echo plugins_url('/images/shortcodes/button.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Button','selements' ); ?></h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="tooltip" data-shortcode="Tooltip">
							<img src="<?php echo plugins_url('/images/shortcodes/tooltip.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Tooltip','selements' ); ?></h4>					
							</div>
						</a>
	                </div>
	            </div>
	           <div class="col-sm-6 col-md-1 els_other els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="alert" data-shortcode="Alert">
							<img src="<?php echo plugins_url('/images/shortcodes/pullquote.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Alert','selements' ); ?></h4>					
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_box els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="panel" data-shortcode="Panel">
							<img src="<?php echo plugins_url('/images/shortcodes/box.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Panel','selements' ); ?></h4>
								<div class="clearfix"></div>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="progressbar" data-shortcode="Progress Bar">
							<img src="<?php echo plugins_url('/images/shortcodes/highlight.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Progress Bar','selements' ); ?></h4>		
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="popover" data-shortcode="Popover">
							<img src="<?php echo plugins_url('/images/shortcodes/tooltip.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Popover','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div> 
	            <div class="col-sm-6 col-md-1 els_media">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="frame" data-shortcode="Photo Frame">
							<img src="<?php echo plugins_url('/images/shortcodes/dummy_image.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Photo Frame','selements' ); ?></h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1  els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="gmap" data-shortcode="Google Map">
							<img src="<?php echo plugins_url('/images/shortcodes/gmap.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Google Map','selements' ); ?></h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="label" data-shortcode="Label">
							<img src="<?php echo plugins_url('/images/shortcodes/label.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Label','selements' ); ?></h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="quote" data-shortcode="Quote">
							<img src="<?php echo plugins_url('/images/shortcodes/quote.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Quote','selements' ); ?></h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="widgets" data-shortcode="Widgets">
							<img src="<?php echo plugins_url('/images/shortcodes/template.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Widgets','selements' ); ?></h4>					
							</div>
						</a>
	                </div>
	            </div>
	           <div class="col-sm-6 col-md-1 other els_content els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="note" data-shortcode="Note">
							<img src="<?php echo plugins_url('/images/shortcodes/note.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Note','selements' ); ?></h4>					
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="youtube" data-shortcode="Youtube">
							<img src="<?php echo plugins_url('/images/shortcodes/youtube_advanced.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Youtube','selements' ); ?></h4>
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="vimeo" data-shortcode="Vimeo">
							<img src="<?php echo plugins_url('/images/shortcodes/vimeo.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Vimeo','selements' ); ?></h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_gallery">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="slider" data-shortcode="Slider">
							<img src="<?php echo plugins_url('/images/shortcodes/slider.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Slider','selements' ); ?></h4>						
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_gallery">
	               <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="gallary" data-shortcode="Gallery">
							<img src="<?php echo plugins_url('/images/shortcodes/custom_gallery.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Gallery','selements' ); ?></h4>				
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="animation" data-shortcode="Animation">
							<img src="<?php echo plugins_url('/images/shortcodes/animate.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Animation','selements' ); ?></h4>					
							</div>
						</a>
	                </div>
	            </div>
	           <div class="col-sm-6 col-md-1 els_other">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="divider" data-shortcode="Divider">
							<img src="<?php echo plugins_url('/images/shortcodes/divider.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Divider','selements' ); ?></h4>					
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="spacer" data-shortcode="Spacer">
							<img src="<?php echo plugins_url('/images/shortcodes/spacer.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Spacer','selements' ); ?></h4>
								<div class="clearfix"></div>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_content els_other els_box">
	                 <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="service" data-shortcode="Service">
							<img src="<?php echo plugins_url('/images/shortcodes/service.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Service','selements' ); ?></h4>		
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_other els_content els_box">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="funfact" data-shortcode="FunFacts">
							<img src="<?php echo plugins_url('/images/shortcodes/divider.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('FunFacts','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="audio" data-shortcode="Audio">
							<img src="<?php echo plugins_url('/images/shortcodes/audio.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Audio','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="expand" data-shortcode="Expand">
							<img src="<?php echo plugins_url('/images/shortcodes/resize-arrows.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Expand','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="lightbox" data-shortcode="Lightbox">
							<img src="<?php echo plugins_url('/images/shortcodes/lightbox.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Light-Box','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
	            <div class="col-sm-6 col-md-1 els_media els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="guests" data-shortcode="Guests">
							<img src="<?php echo plugins_url('/images/shortcodes/guests.svg', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Guests','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_other els_content">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="permalink" data-shortcode="permalink">
							<img src="<?php echo plugins_url('/images/shortcodes/permalink.png', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Permalink','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
				<div class="col-sm-6 col-md-1 els_other">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="highlighter" data-shortcode="Highlighter">
							<img src="<?php echo plugins_url('/images/shortcodes/highlighter.png', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Highlighter','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>	
				<div class="col-sm-6 col-md-1 els_media">
	                <div class="gallary-item">
						<a class="mainpage_shortcode" href="#" data-name="documents" data-shortcode="Documents">
							<img src="<?php echo plugins_url('/images/shortcodes/documents.png', __FILE__); ?>" class="img-responsive" alt="...">
							<div class="text-cont">
								<h4><?php esc_html_e('Add Documents','selements' ); ?></h4>			
							</div>
						</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
		<!-- end-->
<p class="elw-thank-you"><?php esc_html_e('Thank you for choosing Shortcodes Elements Plugin','selements' ); ?></p>
</div>
<div class="els-admin-shortcodes-single-back mb-3">
	<a href="javascript:void(0);" class="button shortcode-editor-back"><span class="dashicons dashicons-arrow-left-alt"></span> <?php esc_html_e('Back to shortcodes list','selements' ); ?></a>
</div>
<div class="option-page" style="width: 65%;"></div>