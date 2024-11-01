<?php 
 if ( ! defined( 'ABSPATH' ) ) exit;
//* Button Code *//
function esweblizar_custom_button($context){
    $container_id = "ESW";
    $title = esc_html__('Select Location to generate the appointment shortcode','selements');
    $context .= '<a class="button button-primary thickbox eswhortcode"
     title="'.esc_html__("Shortcodes Elements","selements").'" href="#TB_inline?width=400&inlineId='.$container_id.'"><img src="'.E_S_WEBLIZAR.'/images/icon.png">
    '.esc_html__("Shortcodes Elements","selements").'</a>';
    return $context;
}
add_action('media_buttons','esweblizar_custom_button');

function esweblizar_inline_popup_content(){ ?>
    <script>
		jQuery(document).ready(function($){
			var shortcodeSelectText = '';
			var shortcodeSelectVal = '';
			//select shortcode File
			$(".shortcode-editor-back").css("display", "none");
			$(".shortcode_optionss").click(function WLselect() {
			shortcodeSelectVal = jQuery(this).attr('data-name');
			shortcodeSelectText = jQuery(this).attr('data-shortcode');

			$("#select-shortcode").css("display", "none");
        	$("#shortcode-editor").css("display", "block");
        	$(".shortcode-editor-back").css("display", "inline-block");
        	$("#shortcode-selector-title").css("display", "none");
            $(".shortcode-editor-title").css("display", "inline-block");
    		$('.shortcode-editor-title').text('  - '+shortcodeSelectText + ' Editor');
        	jQuery('.'+shortcodeSelectVal + '_popup').fadeIn();
			
		})
        // Go Back button
        $(".shortcode-editor-back").click(function WLselect() {
        jQuery('.'+shortcodeSelectVal + '_popup').fadeOut();
      	$("#select-shortcode").css("display", "block");
      	$("#shortcode-selector-title").css("display", "block");
        $("#shortcode-editor").css("display", "none");
        $(".shortcode-editor-title").css("display", "none");
  		})
		.trigger('change');
		 });
	</script>
<div id="ESW" style="display: none;"> 
  <div id="wpex-shortcodes-popup">
	<div id="select-shortcode">
		<div id="weblizar-generator" class="weblizar-generator-narrow">
	    <div id="weblizar-generator-header">
			<input type="text" name="wiblizar_generator_search" id="weblizar-generator-search" value="" placeholder="<?php esc_attr_e("Search for shortcodes","selements"); ?>">
			<p id="weblizar-generator-search-pro-tip"><strong><?php esc_html__("Pro Tip:","selements"); ?></strong> <?php esc_html_e("Hit enter to select highlighted shortcode, while searching","selements"); ?></p>
			<div id="weblizar-generator-filter">
				<strong><?php esc_html_e("Filter by type","selements"); ?></strong>
				<a href="#" data-filter="all"><?php esc_html_e("All","selements"); ?></a>
				<a href="#" data-filter="content"><?php esc_html_e("Content","selements"); ?></a>
				<a href="#" data-filter="box"><?php esc_html_e("Box","selements"); ?></a>
				<a href="#" data-filter="media"><?php esc_html_e("Media","selements"); ?></a>
				<a href="#" data-filter="gallery"><?php esc_html_e("Gallery","selements"); ?></a>
				<a href="#" data-filter="other"><?php esc_html_e("Other","selements"); ?></a>
			</div>
			<div id="weblizar-generator-choices" class="weblizar-generator-clearfix">
				<span class="shortcode_optionss heading_model" data-name="heading" data-shortcode="Heading" title="Styled heading" data-desc="Styled heading" data-group="content" style="opacity: 1;"><i class="fas fa-h-square"></i><?php esc_html_e("Heading","selements"); ?></span>
				<span class="shortcode_optionss accordion_model" data-name="accordion" data-shortcode="Accordion" title="Accordion with spoilers" data-desc="Accordion with spoilers" data-group="box" style="opacity: 1;"><i class="fas fa-list"></i><?php esc_html_e("Accordion","selements"); ?></span>
				<span class="shortcode_optionss tabs_model" data-name="tabs" data-shortcode="Tabs" title="Tabs container" data-desc="Tabs container" data-group="box" style="opacity: 1;"><i class="fas fa-list-alt"></i><?php esc_html_e("Tabs","selements"); ?></span>
				<span class="shortcode_optionss drop_model" data-name="drop" data-shortcode="Drop" title="Dropcap" data-desc="Dropcap" data-group="content" style="opacity: 1;"><i class="fas fa-bold"></i><?php esc_html_e("Dropcap","selements"); ?></span>
				<span class="shortcode_optionss column_model" data-name="column" data-shortcode="Row" title="Row for flexible columns" data-desc="Row for flexible columns" data-group="box" style="opacity: 1;"><i class="fas fa-columns"></i><?php esc_html_e("Columns","selements"); ?></span>
				<span class="shortcode_optionss blog_model" data-name="blog" data-shortcode="Posts" title="Custom posts query with customizable template" data-desc="Custom posts query with customizable template" data-group="other" style="opacity: 1;"><i class="fas fa-th-list"></i><?php esc_html_e("Posts","selements"); ?></span>
				<span class="shortcode_optionss button_model" data-name="button" data-shortcode="Button" title="Styled button" data-desc="Styled button" data-group="content" style="opacity: 1;"><i class="fas fa-heart"></i><?php esc_html_e("Button","selements"); ?></span>
				<span class="shortcode_optionss tooltip_model" data-name="tooltip" data-shortcode="Tooltip" title="Tooltip window with custom content" data-desc="Tooltip window with custom content" data-group="other" style="opacity: 1;"><i class="fas fa-comments"></i><?php esc_html_e("Tooltip","selements"); ?></span>
				<span class="shortcode_optionss alert_model" data-name="alert" data-shortcode="Alert" title="Tooltip window with custom content" data-desc="Alert Tab with custom content" data-group="other" style="opacity: 1;"><i class="fas fa-exclamation-triangle"></i><?php esc_html_e("Alert","selements"); ?></span>
				<span class="shortcode_optionss panel_model" data-name="panel" data-shortcode="Panel" title="Tooltip window with custom content" data-desc="Panel with custom content" data-group="other" style="opacity: 1;"><i class="fas fa-list-alt"></i><?php esc_html_e("Panel","selements"); ?></span>
				<span class="shortcode_optionss progressbar_model" data-name="progressbar" data-shortcode="Progress Bar" title="Tooltip window with custom content" data-desc="Progress bar with custom content" data-group="other" style="opacity: 1;"><i class="fas fa-tasks"></i><?php esc_html_e("Progress Bar","selements"); ?></span>
				<span class="shortcode_optionss popover_model" data-name="popover" data-shortcode="Popover" title="Tooltip window with custom content" data-desc="Popver popup with custom content" data-group="other" style="opacity: 1;"><i class="far fa-hand-pointer"></i><?php esc_html_e("PopOver","selements"); ?></span>
				<span class="shortcode_optionss frame_model" data-name="frame" data-shortcode="Frame" title="Styled image frame" data-desc="Styled image frame" data-group="content" style="opacity: 1;"><i class="fas fa-image"></i><?php esc_html_e("Photo Frame","selements"); ?></span>
				<span class="shortcode_optionss gmap_model" data-name="gmap" data-shortcode="Google Map" title="Maps by Google" data-desc="Maps by Google" data-group="media" style="opacity: 1;"><i class="fas fa-globe"></i><?php esc_html_e("Google map","selements"); ?></span>
				<span class="shortcode_optionss label_model" data-name="label" data-shortcode="Label" title="Styled label" data-desc="Styled label" data-group="content" style="opacity: 1;"><i class="fas fa-tag"></i><?php esc_html_e("Label","selements"); ?></span>
				<span class="shortcode_optionss quote_model" data-name="quote" data-shortcode="Quote" title="Blockquote alternative" data-desc="Blockquote alternative" data-group="box" style="opacity: 1;"><i class="fas fa-quote-right"></i><?php esc_html_e("Quote","selements"); ?></span>
				<span class="shortcode_optionss widget_model" data-name="widget" data-shortcode="Widget" title="Wordpress widget" data-desc="Styled widget" data-group="content" style="opacity: 1;"><i class="fas fa-cogs"></i><?php esc_html_e("Widgets","selements"); ?></span>
				<span class="shortcode_optionss note_model" data-name="note" data-shortcode="Note" title="Colored box" data-desc="Colored box" data-group="box" style="opacity: 1;"><i class="fas fa-list-alt"></i><?php esc_html_e("Note","selements"); ?></span>
				<span class="shortcode_optionss weblizar_youtube_model" data-name="weblizar_youtube" data-shortcode="Youtube" title="YouTube video" data-desc="YouTube video" data-group="media" style="opacity: 1;"><i class="fab fa-youtube"></i><?php esc_html_e("YouTube","selements"); ?></span>
				<span class="shortcode_optionss weblizar_vimeo_model" data-name="weblizar_vimeo" data-shortcode="Vimeo" title="Vimeo video" data-desc="Vimeo video" data-group="media" style="opacity: 1;"><i class="fab fa-vimeo"></i><?php esc_html_e("Vimeo","selements"); ?></span>
				<span class="shortcode_optionss slider_model" data-name="slider" data-shortcode="Slider" title="Customizable image slider" data-desc="Customizable image slider" data-group="gallery" style="opacity: 1;"><i class="fas fa-images"></i><?php esc_html_e("Slider","selements"); ?></span>
				
				<span class="shortcode_optionss animation_model" data-name="animation" data-shortcode="Animation" title="Wrapper for animation. Any nested element will be animated" data-desc="Wrapper for animation. Any nested element will be animated" data-group="other" style="opacity: 1;"><i class="fas fa-bolt"></i><?php esc_html_e("Animation","selements"); ?></span>
				<span class="shortcode_optionss divider_model" data-name="divider" data-shortcode="Divider" title="Content divider with optional TOP link" data-desc="Content divider with optional TOP link" data-group="content" style="opacity: 1;"><i class="fas fa-ellipsis-h"></i><?php esc_html_e("Divider","selements"); ?></span>
				<span class="shortcode_optionss spacer_model" data-name="spacer" data-shortcode="Spacer" title="Empty space with adjustable height" data-desc="Empty space with adjustable height" data-group="content other" style="opacity: 1;"><i class="fas fa-arrows-alt-v"></i><?php esc_html_e("Spacer","selements"); ?></span>
				<span class="shortcode_optionss services_model" data-name="services" data-shortcode="Service" title="Service box with title" data-desc="Service box with title" data-group="content" style="opacity: 1;" class=""><i class="fas fa-check-square"></i><?php esc_html_e("Service","selements"); ?></span>
				<span class="shortcode_optionss funfact_model" data-name="funfact" data-shortcode="Fun-Fact" title="Funfact box with title" data-desc="Funfact box with title" data-group="content" style="opacity: 1;" class=""><i class="fas fa-info"></i><?php esc_html_e("Fun Facts","selements"); ?></span>
				<span class="shortcode_optionss audio_model" data-name="audio" data-shortcode="Audio" title="audio box with title" data-desc="Funfact box with title" data-group="content" style="opacity: 1;" class=""><i class="fas fa-volume-up"></i><?php esc_html_e("Audio","selements"); ?></span>
				<span class="shortcode_optionss expand_model" data-name="expand" data-shortcode="Expand" title="expand box with title" data-desc="Funfact box with title" data-group="content" style="opacity: 1;" class=""><i class="fas fa-sort-amount-up-alt"></i><?php esc_html_e("Expand","selements"); ?></span>
				<span class="shortcode_optionss guests_model" data-name="guests" data-shortcode="Guests" title="guests content with title" data-desc="Only Visible to non-registor user" data-group="content" style="opacity: 1;" class=""><i class="fas fa-user"></i><?php esc_html_e("Guests","selements"); ?></span>
				<span class="shortcode_optionss lightbox_model" data-name="lightbox" data-shortcode="Lightbox for Video" title="lightbox content with title" data-desc="Lightbox with Content" data-group="content" style="opacity: 1;" class=""><i class="fas fa-external-link-alt"></i><?php esc_html_e("Lightbox","selements"); ?></span>
				<span class="shortcode_optionss permalink_model" data-name="permalink" data-shortcode="permalink" title="Empty space with adjustable height" data-desc="Empty space with adjustable height" data-group="content other" style="opacity: 1;"><i class="fas fa-link"></i><?php esc_html_e("Permalink","selements"); ?></span>
				<span class="shortcode_optionss highlighter_model" data-name="highlighter" data-shortcode="highlighter" title="Empty space with adjustable height" data-desc="Empty space with adjustable height" data-group="content other" style="opacity: 1;"><i class="fas fa-link"></i><?php esc_html_e("Highlighter","selements"); ?></span>
				<span class="shortcode_optionss doc_model" data-name="documents" data-shortcode="documents" title="Empty space with adjustable height" data-desc="Empty space with adjustable height" data-group="content other" style="opacity: 1;"><i class="fas fa-file"></i><?php esc_html_e("Documents","selements"); ?></span>
			</div>
		</div>
	</div>
	</div>
    	<div id="shortcode-editor">
    		<div id="shortcode-editor-inner" class="clearfix">
    			<h4>
	    			<a style="text-decoration: none;" class="shortcode-editor-back" href="javascript:void(0);"  >
	    				<i class="fas fa-arrow-circle-left" aria-hidden="true"></i>
	    				<?php esc_html_e("Go Back To All Shortcodes","selements"); ?>
	    			</a>
	    			<span class="shortcode-editor-title" style="margin-left: 7px;"></span>
	    		</h4>
    			<div id="selected-shortcode">
	    			<div class="blog_popup" style="display: none;">
						<?php
						$args = array('type'=> 'post','taxonomy'=> 'category', array('hide_empty' => false));
						$tax_terms = get_categories( $args );
						?>
						<div class="container">
						  <form action="/" method="get" accept-charset="utf-8">
							<div class="row">
								<div class="col-25">
									<label for="country"><?php esc_html_e("Display Post Categories","selements"); ?></label>
								</div>
								<div class="col-75">
									<select class="input" size="1" id="blog_cat_show" name="blog_cat_show">
						      			<option selected="selected" value="yes"><?php esc_attr_e("Yes","selements"); ?></option>
										<option value="no"><?php esc_html_e("NO","selements"); ?></option>
									</select>
								</div>
							</div>
						    <div class="row">
						      <div class="col-25">
						        <label for="fname"><?php esc_html_e("Select your Portfolio Categories Name:","selements"); ?></label>
						      </div>
						      <div class="col-75">
								<select multiple="multiple"  id="blog_cat_name" name="blog_cat_name">
								<?php foreach ($tax_terms as $tax_term) { ?>
									<option selected="selected" value="<?php echo esc_attr( $tax_term->term_id ); ?>"><?php echo esc_html($tax_term->name); ?></option>
								<?php } ?>
								</select>
						      </div>
						    </div>
						    <div class="row">
						      <div class="col-25">
						        <label for="country"><?php esc_html_e("Blog Type","selements"); ?></label>
						      </div>
						      <div class="col-75">
								<select class="input" size="1" id="blog_type" name="blog_type">
						          <option selected="selected" value="2"><?php esc_html_e("Two-Column","selements"); ?></option>
								  <option value="3"><?php esc_html_e("Three-Column","selements"); ?></option>
								  <option value="4"><?php esc_html_e("Four-Columnt","selements"); ?></option>
								</select>
						      </div>
						    </div>
						    <div class="row">
								<div class="col-25">
						      		<input class="btn custom_button_shortcode" value="<?php esc_attr_e('Insert','selements'); ?>" name="" id="insert_blog" style="display: block;">
						    	</div>
							</div>
						  </form>
						</div>
	    			</div>	    			
	    			<div class="heading_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/heading.php'); ?>
	    			</div>
    			   <div class="accordion_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/accordion.php'); ?>
	    			</div>
	    			<div class="tabs_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/tabs.php'); ?>
	    			</div>
	    			<div class="drop_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/drop.php'); ?>
	    			</div>
	    			<div class="column_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/column.php'); ?>
	    			</div>
	    			<div class="tooltip_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/tooltip.php'); ?>
	    			</div>
	    			<div class="button_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/button.php'); ?>
	    			</div>
	    			<div class="alert_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/alert.php'); ?>
	    			</div>
	    			<div class="panel_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/panel.php'); ?>
	    			</div>
	    			<div class="progressbar_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/progressbar.php'); ?>
	    			</div>
	    			<div class="popover_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/popover.php'); ?>
	    			</div>
					<div class="highlighter_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/highlighter.php'); ?>
	    			</div>
	    			<div class="frame_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/frame.php'); ?>
	    			</div>
	    			<div class="gmap_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/gmap.php'); ?>
	    			</div>
	    			<div class="label_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/label.php'); ?>
	    			</div>
	    			<div class="quote_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/quote.php'); ?>
	    			</div>
	    			<div class="widget_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/widget.php'); ?>
	    			</div>
	    			<div class="note_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/note.php'); ?>
	    			</div>
	    			<div class="weblizar_youtube_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/weblizar_youtube.php'); ?>
	    			</div>
	    			<div class="weblizar_vimeo_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/vimeo.php'); ?>
	    			</div>
	    			<div class="slider_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/slider.php'); ?>
	    			</div>
	    			<div class="gallery_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/gallery.php'); ?>
	    			</div>
	    			<div class="animation_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/animation.php'); ?>
	    			</div>
	    			<div class="divider_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/divider.php'); ?>
	    			</div>
	    			<div class="spacer_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/spacer.php'); ?>
	    			</div>
	    			<div class="services_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/services.php'); ?>
	    			</div>
	    			<div class="funfact_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/funfact.php'); ?>
	    			</div>
					<div class="audio_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/audio.php'); ?>
	    			</div>
					<div class="expand_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/expand.php'); ?>
	    			</div>
	    			<div class="guests_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/guests.php'); ?>
	    			</div>
	    			<div class="lightbox_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/lightbox.php'); ?>
	    			</div>
					<div class="permalink_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/permalink.php'); ?>
	    			</div>
					<div class="documents_popup" style="display: none;">
	    				<?php  include( SE_PLUGIN_DIR_PATH . 'types/documents.php'); ?>
	    			</div>
    			</div>
    		</div>
    	</div>
</div>
</div>
<?php
}
add_action('admin_footer','esweblizar_inline_popup_content');