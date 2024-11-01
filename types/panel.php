<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Default Panel color","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="panel_color" name="panel_color" style="width:150px;" >
				<option value="panel-default" selected="selected"> <?php esc_html_e("Default","selements"); ?></option>
				<option value="weblizar_panel-red"> <?php esc_html_e("Red","selements"); ?></option>
				<option value="weblizar_panel-green"> <?php esc_html_e("Green","selements"); ?></option>
				<option value="weblizar_panel-blue"> <?php esc_html_e("Blue","selements"); ?></option>
				<option value="weblizar_panel-black"> <?php esc_html_e("Black","selements"); ?></option>
				<option value="weblizar_panel-orange"> <?php esc_html_e("Orange","selements"); ?></option>
				<option value="weblizar_panel-purple"> <?php esc_html_e("Purple","selements"); ?></option>
				<option value="weblizar_panel-brown"><?php esc_html_e("Brown","selements"); ?></option>
				</select>
			</div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Custom Color","selements"); ?></label>
      </div>
      <div class="col-75">
        <input type="text" class="color_picker_shortcode" id="panel_custom_color" />
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Title (Optional)","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Panel title","selements"); ?>" type="text" id="panel_heading" value="" name="panel_heading">
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Description","selements"); ?></label>
      </div>
      <div class="col-75">
      <textarea class="input-xlarge" rows="8" id="panel_text" value="<?php esc_attr_e("Panel Description.....","selements"); ?>" name="panel_text" type="text"><?php esc_html_e("This text area show all text.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Class","selements"); ?>" type="text" id="panel_class" value="" name="panel_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      <input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_panel" style="display: block;">
    	</div>
		</div>
  </form>
</div>
