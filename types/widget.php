<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Widgets","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="widget_style" name="widget_style">
				<option value="" selected="selected"><?php esc_html_e("select widget","selements"); ?></option>
				<option value="WP_Widget_Archives"><?php esc_html_e("Archives","selements"); ?></option>
				<option value="WP_Widget_Calendar"><?php esc_html_e("Calander","selements"); ?></option>
				<option value="WP_Widget_Categories"><?php esc_html_e("Categories","selements"); ?></option>
				<option value="WP_Widget_Links"><?php esc_html_e("Links","selements"); ?></option>
				<option value="WP_Widget_Meta"><?php esc_html_e("Meta","selements"); ?></option>
				<option value="WP_Widget_Pages"><?php esc_html_e("Pages","selements"); ?></option>
				<option value="WP_Widget_Recent_Comments"><?php esc_html_e("Recent Comments","selements"); ?></option>
				<option value="WP_Widget_Recent_Posts"><?php esc_html_e("Recent Posts","selements"); ?></option>
				<option value="WP_Widget_RSS"><?php esc_html_e("RSS","selements"); ?></option>
				<option value="WP_Widget_Search"><?php esc_html_e("Search","selements"); ?></option>
				<option value="WP_Widget_Tag_Cloud"><?php esc_html_e("Tag Cloud","selements"); ?></option>
				</select>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="widget_class" value="" name="widget_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
    <input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_widget" style="display: block;">
    	</div>
		</div>
  </form>
</div>
