	// Search js //
		jQuery(document).ready(function($) {
			// Prepare data
			var $generator = $('#weblizar-generator'),
				$search = $('#weblizar-generator-search'),
				$filter = $('#weblizar-generator-filter'),
				$filters = $filter.children('a'),
				$choices = $('#weblizar-generator-choices'),
				$choice = $choices.find('span'),
				$settings = $('#weblizar-generator-settings'),
				$prefix = $('#weblizar-compatibility-mode-prefix'),
				$result = $('#weblizar-generator-result'),
				$selected = $('#weblizar-generator-selected'),
				mce_selection = '';
			// Search Field
			$search.change(function(e) {
				// Prepare data
				var search = $(this).val();
				/*alert(search);*/
				regex = new RegExp(search, 'gi'),
						best = 0;
					// Hotkey action
					if (e.keyCode === 13 && $first.length > 0) {
						e.preventDefault();
						$(this).val('').blur();
						$first.trigger('click');
					}
					// Hide all choices
					$choice.css({
						opacity: 0.2
					}).removeClass('weblizar-generator-choice-first');
					// Loop and highlight choices
					$choice.each(function() {
						// Get choice data
						var data = $(this).data(),
							id = data.shortcode,
							name = data.name,
							desc = data.desc,
							group = data.group,
							matches = ([id, name, desc, group].join(' ')).match(regex);
						// Highlight choice if matched
						if (matches !== null) {
							// Highlight current choice
							$(this).css({
								opacity: 1
							});
							// Check for exact match
							if (search === id) {
								// Remove primary class from all choices
								$choice.removeClass('weblizar-generator-choice-first');
								// Add primary class to the current choice
								$(this).addClass('weblizar-generator-choice-first');
								// Prevent selecting by matches number
								best = 999;
							}
							// Check matches length
							else if (matches.length > best) {
								// Remove primary class from all choices
								$choice.removeClass('weblizar-generator-choice-first');
								// Add primary class to the current choice
								$(this).addClass('weblizar-generator-choice-first');
								// Save the score
								best = matches.length;
							}
						}
					});
					// Remove primary class if search field is empty
					if (search === '') $choice.removeClass('weblizar-generator-choice-first');
				e.preventDefault();
			});
			// Filters
			$filters.click(function(e) {
				// Prepare data
				var filter = $(this).data('filter');
				// If filter All, show all choices
				if (filter === 'all') $choice.css({
					opacity: 1
				}).removeClass('weblizar-generator-choice-first');
				// Else run search
				else {
					var regex = new RegExp(filter, 'gi');
					// Hide all choices
					$choice.css({
						opacity: 0.2
					});
					// Find searched choices and show
					$choice.each(function() {
						// Get shortcode name
						var group = $(this).data('group');
						// Show choice if matched
						if (group.match(regex) !== null) $(this).css({
							opacity: 1
						}).removeClass('weblizar-generator-choice-first');
					});
				}
				e.preventDefault();
			});
		});

 //Main Js For shortcodes settings //

 // Heading //
	jQuery(document).ready(function() {
	jQuery('#heading_insert').on('click', function() {
	var title = jQuery('input#heading_title').val();
	var fontsize = jQuery('input.fontsizeh').val();
	var align = jQuery('select#su-generator-attr-align').val();
	var margin = jQuery('input#margin').val();
	var css_class = jQuery('input#extra-class').val();
	var color = jQuery('input#heading_custom_color').val();
	var font_weight = jQuery('input#weight').val();
	window.send_to_editor('<p>[heading ');
	window.send_to_editor(' title="' + title + '" ');
	window.send_to_editor(' color="' + color + '" ');
	window.send_to_editor(' font_weight="' + font_weight + '" ');
	window.send_to_editor(' fontsize="' + fontsize + '" ');
	window.send_to_editor(' margin="' + margin + '" ');
	window.send_to_editor(' css_class="' + css_class + '" ');
	window.send_to_editor(' align="' + align + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Blog //
	jQuery(document).ready(function() {
	jQuery('#insert_blog').on('click', function() {
	var blog_type = jQuery('select#blog_type').val();
	var blog_cat_show = jQuery('select#blog_cat_show').val();
	var blog_cat_name =  jQuery('select#blog_cat_name').val();
	window.send_to_editor('<p>[blog_post ');
	window.send_to_editor(' blog_type="' + blog_type + '" ');
	window.send_to_editor(' blog_cat_show="' + blog_cat_show + '" ');
	window.send_to_editor(' blog_cat_name="' + blog_cat_name + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Alert //
	jQuery(document).ready(function() {
	jQuery('#insert_alert').on('click', function() {
	var alert_style = jQuery('select#alert_style').val();
	var alert_heading = jQuery('input#alert_heading').val();
	var alert_class = jQuery('input#alert_class').val();
	var alert_text = jQuery('textarea#alert_text').val();
	// var alert_color = jQuery('select#alert_color').val();
	window.send_to_editor('<p>[alert ');
	window.send_to_editor(' alert_style="' + alert_style + '" ');
	window.send_to_editor(' alert_heading="' + alert_heading + '" ');
	window.send_to_editor(' alert_class="' + alert_class + '" ');
	window.send_to_editor(' alert_text="' + alert_text + '" ');
	//				window.send_to_editor(' alert_color="' + alert_color + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Guests //
	jQuery(document).ready(function() {
		jQuery('#insert_guests').on('click', function() {
			var guests_class = jQuery('input#guests_class').val();
			var guests_text = jQuery('textarea#guests_text').val();
			// var alert_color = jQuery('select#alert_color').val();
			window.send_to_editor('<p>[guests ');
			window.send_to_editor(' guests_class="' + guests_class + '" ');
			window.send_to_editor(' guests_text="' + guests_text + '" ');
			window.send_to_editor(' ]</p>');
			tb_remove();
		})
	});
// Lightbox //
	jQuery(document).ready(function() {
		jQuery('#insert_lightbox').on('click', function() {
			var lightbox_class = jQuery('input#lightbox_class').val();
			var lightbox_text = jQuery('textarea#lightbox_text').val();
			var lightbox_src = jQuery('input#lightbox_src').val();
			window.send_to_editor('<p>[lightbox ');
			window.send_to_editor(' lightbox_class="' + lightbox_class + '" ');
			window.send_to_editor(' lightbox_text="' + lightbox_text + '" ');
			window.send_to_editor(' lightbox_src="' + lightbox_src + '" ');
			window.send_to_editor(' ]</p>');
			tb_remove();
		})
	});


// Animation //
	jQuery(document).ready(function() {
	jQuery('#insert_animation').on('click', function() {
	var animate_name = jQuery('select#animate_name').val();
	var duration = jQuery('input#duration').val();
	var delay = jQuery('input#delay').val();
	var animate_text = jQuery('textarea#animate_text').val();
	var animate_class = jQuery('input#animate_class').val();
	window.send_to_editor('<p>[animation ');
	window.send_to_editor(' animate_name="' + animate_name + '" ');
	window.send_to_editor(' duration="' + duration + '" ');
	window.send_to_editor(' delay="' + delay + '" ');
	window.send_to_editor(' animate_text="' + animate_text + '" ');
	window.send_to_editor(' animate_class="' + animate_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Button //
	jQuery(document).ready(function() {
	jQuery('#insert_button').on('click', function() {
	var style = jQuery('select#buttonstyle').val();
	var size = jQuery('select#size').val();
	var button_class = jQuery('input#button_class').val();
	var border = jQuery('select#border').val();
	var btn_disable = jQuery('input#btn_disable').attr('checked') ? 1 : 0;
	var target = jQuery('select#target').val();
	var buttonlink = jQuery('input#button-link').val();
	var color = jQuery('input#button_custom_color').val();
	var textdata = jQuery('input#button-text').val();
	window.send_to_editor('<p>[button ');
	if(color){
	window.send_to_editor(' color="' + color + '" ');	
	}
	else {
	window.send_to_editor(' style="' + style + '" ');	
	}
	window.send_to_editor(' size="' + size + '" ');
	window.send_to_editor(' button_class="' + button_class + '" ');
	window.send_to_editor(' border="' + border + '" ');
	//   window.send_to_editor(' btn_disable="' + btn_disable + '" ');
	window.send_to_editor(' target="' + target + '" ');
	window.send_to_editor(' buttonlink="' + buttonlink + '" ');
	window.send_to_editor(' textdata="' + textdata + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// column //
    jQuery(document).ready(function() {
    jQuery('#insert_col').on('click', function() {
		var size = jQuery('select#column-size').val();
		var textdata = jQuery('textarea#column-content').val();

		if(!textdata)
		{  textdata = "text"; }
		window.send_to_editor(' ');
		if(size == "col-md-6")
		{  output1 ='[column size="' + size + '" ] '+ textdata + '[/column]';
			output2 = output1;
			output = window.send_to_editor('[row]' + output1 + output2 + '[/row]');
		}
		if(size == "col-md-12")
		{ 	var output1 = '[column size="' + size + '" ] '+ textdata + '[/column]';
			output = window.send_to_editor('[row]' + output1 + '[/row]');
		}
		if(size == "col-md-3")
		{ 	var output1 = '[column size="' + size + '" ] '+ textdata + '[/column]';
			var output2 = output3 = output4 = output1;
			output = window.send_to_editor('[row]' + output1 + output2 + output3 + output4 +'[/row]');
		}
		if(size == "col-md-4")
		{ 	var output1 = '[column size="' + size + '" ] '+ textdata + '[/column]';
			var output2 = output3 = output1;
			output = window.send_to_editor('[row]' + output1 + output2 + output3 +'[/row]');
		}
		if(size == "col-md-8")
		{ 	var output1 = '[column size="' + size + '" ] '+ textdata + '[/column]';
			var output2 ='[column size="col-md-4" ]'+ textdata + '[/column]';
			output = window.send_to_editor('[row]' + output1 + output2  +'[/row]');
		}
		if(size == "col-md-9")
		{ 	var output1 = '[column size="' + size + '" ] '+ textdata + '[/column]';
			var output2 = '[column size="col-md-3" ] '+ textdata + '[/column]';
			output = window.send_to_editor('[row]' + output1 + output2  +'[/row]');
		}
    window.send_to_editor(output);
    tb_remove();
	});
});
// Divider //
	jQuery(document).ready(function() {
	jQuery('#insert_divider').on('click', function() {
	var divider_style = jQuery('select#divider_style').val();
	var divider_class = jQuery('input#divider_class').val();
	var divider_margin = jQuery('input#divider_margin').val();
	var divider_height = jQuery('input#divider_height').val();
	window.send_to_editor('<p>[divider ');
	window.send_to_editor(' divider_style="' + divider_style + '" ');
	window.send_to_editor(' divider_class="' + divider_class + '" ');
	window.send_to_editor(' divider_margin="' + divider_margin + '" ');
	window.send_to_editor(' divider_height="' + divider_height + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Drop //
	jQuery(document).ready(function() {
	jQuery('#insert_drop').on('click', function() {
	var dropcp_style = jQuery('select#dropcp_style').val(); 
	var dropcp_text = jQuery('textarea#dropcp_text').val();
	var button_custom_bgcolor = jQuery('input#button_custom_bgcolor').val();
	var dropcp_first_letter = jQuery('input#dropcp_first_letter').val();
	var dropcp_class = jQuery('input#dropcp_class').val();
	var color = jQuery('input#drop_custom_color').val();
	window.send_to_editor('<p>[dropcap ');
	window.send_to_editor(' dropcp_style="' + dropcp_style + '" ');
	window.send_to_editor(' bg_color="' + button_custom_bgcolor + '" ');
	window.send_to_editor(' color="' + color + '" ');
	window.send_to_editor(' dropcp_text="' + dropcp_text + '" ');
	window.send_to_editor(' dropcp_first_letter="' + dropcp_first_letter + '" ');
	window.send_to_editor(' dropcp_class="' + dropcp_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// FunFact //
	jQuery(document).ready(function() {
	jQuery('#insert_fact').on('click', function() {
	var fun_title = jQuery('input#fun_title').val();
	var fun_icon = jQuery('input#fun_icon').val();
	var button_custom_color = jQuery('input#fact_custom_color').val();
	var fun_class = jQuery('input#fun_class').val(); 
	var icon_value = jQuery('input#icon_value').val();
	var icon_size = jQuery('input#icon_size').val();
	var fun_contnt = jQuery('textarea#fun_contnt').val(); 
	window.send_to_editor('<p>[funfact ');
	window.send_to_editor(' title="' + fun_title + '" ');
	window.send_to_editor(' icon="' + fun_icon + '" ');
	window.send_to_editor(' icon_size="' + icon_size + '" ');
	window.send_to_editor(' color="' + button_custom_color + '" ');
	window.send_to_editor(' fun_class="' + fun_class + '" ');
	window.send_to_editor(' fun_content="' + fun_contnt + '" '); 
	window.send_to_editor(' icon_value="' + icon_value + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Label //
	jQuery(document).ready(function() {
	jQuery('#insert_label').on('click', function() {
	var label_style = jQuery('select#label_style').val();
	var label_class = jQuery('input#label_class').val();
	var label_text = jQuery('textarea#label_text').val();
	window.send_to_editor('<p>[label ');
	window.send_to_editor(' label_style="' + label_style + '" ');
	window.send_to_editor(' label_class="' + label_class + '" ');
	window.send_to_editor(' label_text="' + label_text + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Panel //
	jQuery(document).ready(function() {
	jQuery('#insert_panel').on('click', function() {
	var panel_heading = jQuery('input#panel_heading').val();
	var panel_text = jQuery('textarea#panel_text').val();
	var panel_color = jQuery('select#panel_color').val();
	var panel_class = jQuery('input#panel_class').val();
	var color = jQuery('input#panel_custom_color').val();
	window.send_to_editor('<p>[panel ');
	if(color){
	window.send_to_editor(' color="' + color + '" ');
	}else {
	window.send_to_editor(' panel_color="' + panel_color + '" ');
	}
	window.send_to_editor(' panel_heading="' + panel_heading + '" ');
	window.send_to_editor(' panel_text="' + panel_text + '" ');
	window.send_to_editor(' panel_class="' + panel_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Note //
	jQuery(document).ready(function() {
	jQuery('#insert_note').on('click', function() {
	var note_class = jQuery('input#note_class').val();
	var note_text = jQuery('textarea#note_text').val();
	var color = jQuery('input#note_custom_color').val();
	window.send_to_editor('<p>[note ');
	window.send_to_editor(' color="' + color + '" ');
	window.send_to_editor(' note_class="' + note_class + '" ');
	window.send_to_editor(' note_text="' + note_text + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Popover //
	jQuery(document).ready(function() {
	jQuery('#insert_pop').on('click', function() {
	var popover_style = jQuery('select#popover_style').val();
	var popover_text = jQuery('input#popover_text').val();
	var popover_over_text = jQuery('input#popover_over_text').val();
	var pop_class = jQuery('input#pop_class').val();
	var pop_border = jQuery('select#pop_border').val();
	var color = jQuery('input#popover_custom_color').val();
	var popstyle = jQuery('select#popstyle').val();
	window.send_to_editor('<p>[popover ');
	if(color){
	window.send_to_editor(' color="' + color + '" ');
	}else {
	window.send_to_editor(' popstyle="' + popstyle + '" ');
	}
	window.send_to_editor(' popover_text="' + popover_text + '" ');
	window.send_to_editor(' popover_over_text="' + popover_over_text + '" ');
	window.send_to_editor(' pop_class="' + pop_class + '" ');
	window.send_to_editor(' pop_border="' + pop_border + '" ');
	window.send_to_editor(' popover_style="' + popover_style + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});

// Heighlighter //
	jQuery(document).ready(function() {
	jQuery('#insert_light').on('click', function() {
	var heighliter_text = jQuery('input#heighliter_text').val();
	var light_class = jQuery('input#light_class').val();
	var color = jQuery('input#heighliter_text_color').val();
	var bg_color = jQuery('input#heighliter_text_bg_color').val();
	window.send_to_editor('<p>[highlighter ');
	window.send_to_editor(' color="' + color + '" ');
	window.send_to_editor(' bg_color="' + bg_color + '" ');
	window.send_to_editor(' heighliter_text="' + heighliter_text + '" ');
	window.send_to_editor(' light_class="' + light_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
	
// Progress Bar //
	jQuery(document).ready(function() {
	jQuery('#insert_progress').on('click', function() {
	var progress_percentag = jQuery('input#progress_percentag').val();
	var progress_class = jQuery('input#progress_class').val();
	var progress_heading = jQuery('input#progress_heading').val();
	var color = jQuery('input#progress_custom_color').val();
	window.send_to_editor('<p>[progressbar ');
	window.send_to_editor(' color="' + color + '" ');
	window.send_to_editor(' progress_percentag="' + progress_percentag + '" ');
	window.send_to_editor(' progress_class="' + progress_class + '" ');
	window.send_to_editor(' progress_heading="' + progress_heading + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// service //
	jQuery(document).ready(function() {
	jQuery('#insert_service').on('click', function() {
	var service_title = jQuery('input#service_title').val();
	var service_icon = jQuery('input#service_icon').val();
	var button_custom_color = jQuery('input#service_custom_color').val();
	var service_class = jQuery('input#service_class').val(); 
	var icon_size = jQuery('input#icon_size').val();
	var service_contnt = jQuery('textarea#service_contnt').val(); 
	window.send_to_editor('<p>[service ');
	window.send_to_editor(' title="' + service_title + '" ');
	window.send_to_editor(' icon="' + service_icon + '" ');
	window.send_to_editor(' icon_size="' + icon_size + '" ');
	window.send_to_editor(' color="' + button_custom_color + '" ');
	window.send_to_editor(' service_class="' + service_class + '" ');
	window.send_to_editor(' service_content="' + service_contnt + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Quote //
	jQuery(document).ready(function() {
	jQuery('#insert_quote').on('click', function() {
	var author_nmae = jQuery('input#author_nmae').val();
	var quote_text = jQuery('textarea#quote_text').val();
	var quote_url = jQuery('input#quote_url').val();
	var quote_class = jQuery('input#quote_class').val();
	window.send_to_editor('<p>[quote ');
	window.send_to_editor(' author_nmae="' + author_nmae + '" ');
	window.send_to_editor(' quote_text="' + quote_text + '" ');
	window.send_to_editor(' quote_url="' + quote_url + '" ');
	window.send_to_editor(' quote_class="' + quote_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Slider //
  jQuery(document).ready(function() {
  jQuery('#insert_slider').on('click', function() {
  var slider_type = jQuery('select#slider_type').val();
  var slider_class = jQuery('input#slider_class').val();
  var image_length_slider = jQuery('input#image_length_slider').val();
  var image_url_slider = [];
  for (var i = 0; i < image_length_slider; i++) {
  image_url_slider[i] = jQuery('input#image_url_slider-'+ i).val();
  }
  if(slider_type == 'carousel')
  {
  window.send_to_editor('<p>[carousel ');
  } else {
  window.send_to_editor('<p>[swiper ');
  }
  window.send_to_editor(' image_url="' + image_url_slider + '" ');
  window.send_to_editor(' image_length="' + image_length_slider + '" ');
  if(slider_class)
  {
  window.send_to_editor(' slider_class="' + slider_class + '" ');
  }
  window.send_to_editor(' ]</p>');
  tb_remove();
  });
  });
// Spacer //
	jQuery(document).ready(function() {
	jQuery('#insert_spacer').on('click', function() {
	var spacer_class = jQuery('input#spacer_class').val();
	var spaceheight = jQuery('input#spaceheight').val();
	var mceSelected = tinyMCE.activeEditor.selection.getContent();
	window.send_to_editor('<p>[spacer ');
	window.send_to_editor(' spacer_class="' + spacer_class + '" ');
	window.send_to_editor(' spaceheight="' + spaceheight + '" ');
	window.send_to_editor(' mceSelected="' + mceSelected + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// Vimeo //
	jQuery(document).ready(function() {
	jQuery('#insert_vimeo').on('click', function() {
	var vimeo_width = jQuery('input#vimeo_width').val();
	var vimeo_height = jQuery('input#vimeo_height').val();
	var v_autoplay = jQuery('input#v_autoplay').val();
	var v_class = jQuery('input#v_class').val();
	var v_url = jQuery('input#v_url').val();
	window.send_to_editor('<p>[vimeo ');
	window.send_to_editor(' vimeo_width="' + vimeo_width + '" ');
	window.send_to_editor(' vimeo_height="' + vimeo_height + '" ');
	window.send_to_editor(' v_autoplay="' + v_autoplay + '" ');
	window.send_to_editor(' v_class="' + v_class + '" ');
	window.send_to_editor(' v_url="' + v_url + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
// youtube //
	jQuery(document).ready(function() {
	jQuery('#insert_youtube').on('click', function() {var y_controls = jQuery('select#y_controls').val();
	var y_autohide = jQuery('select#y_autohide').val();
	var y_theme = jQuery('select#y_theme').val();
	var youtube_width = jQuery('input#youtube_width').val();
	var youtube_height = jQuery('input#youtube_height').val();
	var y_responsive = jQuery('input#y_responsive').val();
	var y_title = jQuery('input#y_title').val();
	var y_autoplay = jQuery('input#y_autoplay').val();
	var y_loop = jQuery('input#y_loop').val();
	var y_fullscreen = jQuery('input#y_fullscreen').val();
	var y_branding = jQuery('input#y_branding').val();
	var y_class = jQuery('input#y_class').val();
	var you_url = jQuery('input#you_url').val();
	if(y_branding=='on'){ y_branding='1'; } else { y_branding='0'; }
	if(y_loop=='on'){ y_loop='1'; } else { y_loop='0'; }
	if(y_fullscreen=='on'){ y_fullscreen='1'; } else { y_fullscreen='0'; }
	if(y_autoplay=='on'){ y_autoplay='1'; } else { y_autoplay='0'; }
	if(y_title=='on'){ y_title='1'; } else { y_title='0'; }
	if(y_responsive=='on'){ y_responsive='1'; } else { y_responsive='0'; }

	window.send_to_editor('<p>[weblizar_youtube ');
	window.send_to_editor(' you_url="' + you_url + '" ');
	if(y_controls)
	{
	window.send_to_editor(' y_controls="' + y_controls + '" ');
	}
	if(y_autohide)
	{
	window.send_to_editor(' y_autohide="' + y_autohide + '" ');
	}
	if(y_theme)
	{
	window.send_to_editor(' y_theme="' + y_theme + '" ');
	}
	if(youtube_width)
	{
	window.send_to_editor(' youtube_width="' + youtube_width + '" ');
	}
	if(youtube_height)
	{
	window.send_to_editor(' youtube_height="' + youtube_height + '" ');
	}
	if(y_responsive)
	{
	window.send_to_editor(' y_responsive="' + y_responsive + '" ');
	}
	if(y_title)
	{
	window.send_to_editor(' y_title="' + y_title + '" ');
	}
	if(y_autoplay)
	{
	window.send_to_editor(' y_autoplay="' + y_autoplay + '" ');
	}
	if(y_loop)
	{
	window.send_to_editor(' y_loop="' + y_loop + '" ');
	}
	if(y_fullscreen)
	{
	window.send_to_editor(' y_fullscreen="' + y_fullscreen + '" ');
	}
	if(y_branding)
	{
	window.send_to_editor(' y_branding="' + y_branding + '" ');
	}
	if(y_class)
	{
	window.send_to_editor(' y_class="' + y_class + '" ');
	}
	window.send_to_editor(' ]</p>');
	tb_remove();
	});
	});
// Widgets //
	jQuery(document).ready(function() {
	jQuery('#insert_widget').on('click', function() {
	var widget_style = jQuery('select#widget_style').val();
	var widget_class = jQuery('input#widget_class').val();
	if ( widget_class.length == 0 ) {
		widget_class = '';
	}
	window.send_to_editor('<p>[widget ');
	window.send_to_editor(' widget_style="' + widget_style + '" ');
	window.send_to_editor(' widget_class="' + widget_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
	
// permalink //
jQuery(document).ready(function() {
	jQuery('#insert_permalink').on('click', function() {
	var permalinkid = jQuery('input#permalink_id').val();
	var permalink_class = jQuery('input#permalink_class').val();
	var target = jQuery('select#link_target').val();
	var text = jQuery('input#per_hover_text').val();
	window.send_to_editor('<p>[permalink ');
	window.send_to_editor(' permalinkid="' + permalinkid + '" ');
	window.send_to_editor(' permalink_class="' + permalink_class + '" ');
	window.send_to_editor(' target="' + target + '" ');
	window.send_to_editor(' text="' + text + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});	
	
// Tooltip //
	jQuery(document).ready(function() {
	jQuery('#insert_tooltip').on('click', function() {
	var tooltip_style = jQuery('select#tooltip_style').val();
	var toolstyle = jQuery('select#toolstyle').val();
	var border_tool = jQuery('select#border_tool').val();
	var tooltip_text = jQuery('input#tooltip_text').val();
	var tooltip_over_text = jQuery('input#tooltip_over_text').val();
	var tooltip_class = jQuery('input#tooltip_class').val();
	var color = jQuery('input#tooltip_custom_color').val();
	window.send_to_editor('<p>[tooltip ');
	if(color){
	window.send_to_editor(' color="' + color + '" ');
	}else {
	window.send_to_editor(' toolstyle="' + toolstyle + '" ');
	}
	window.send_to_editor(' tooltip_style="' + tooltip_style + '" ');
	window.send_to_editor(' border_tool="' + border_tool + '" ');
	window.send_to_editor(' tooltip_text="' + tooltip_text + '" ');
	window.send_to_editor(' tooltip_over_text="' + tooltip_over_text + '" ');
	window.send_to_editor(' tooltip_class="' + tooltip_class + '" ');
	window.send_to_editor(' ]</p>');
	tb_remove();
	})
	});
	
 // color picker //
 jQuery('.color_picker_shortcode').wpColorPicker();

 // Media gallery //
//   jQuery(document).ready(function($){
//     $('#upload-btn').click(function(e) {
//         e.preventDefault();
//         var image = wp.media({ 
//             title: 'Upload Image',
//             // mutiple: true if you want to upload multiple files at once
//             multiple: true
//         }).open()
//         .on('select', function(e){
//             // This will return the selected image from the Media Uploader, the result is an object
//             var uploaded_image = image.state().get('selection').map(
//               function( attachment ) {
//                     attachment.toJSON();
//                     return attachment;
//             });
//             for (var i = 0; i < uploaded_image.length; i++) {
//              // console.log(uploaded_image[i].attributes.url);
//                $('#myplugin-placeholder').after(
//                     '<div class="myplugin-image-preview"><img width="100px" height="100" style="display:inline-block;border-radius:50%;border: 1px solid #8f8e8e;padding: 2px;" src="' + 
//                     uploaded_image[i].attributes.url + '" ></div>'
//                     );
//                 $('#myplugin-placeholder').after(
//                     '<input id="image_url-'+ i +'" type="hidden" name="myplugin_attachment_url"  value="' + uploaded_image[i].attributes.url + '">' 
//                     );
//             }
//              $('#image_length').val(uploaded_image.length);        
//         });
//     });
// });

   // Icon Picker //
 // jQuery('.demo').iconpicker();