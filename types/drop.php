<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Style","selements"); ?></label>
			</div>
			<div class="col-75">
				<select id="dropcp_style" name="dropcp_style">
					<option value="weblizar_dropcape_square" selected="selected"><?php esc_html_e("Square Colored","selements"); ?></option>
					<option value="weblizar_dropcape_circle"><?php esc_html_e("Circle Colored","selements"); ?></option>
					<option value="weblizar_dropcape_simple"><?php esc_html_e("Simple","selements"); ?></option>
				</select>
			</div>
		</div>
	<div class="row">
		<div class="col-25">
			<label for="country"><?php esc_html_e("Color","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="text" class="color_picker_shortcode" id="drop_custom_color" />
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="country"><?php esc_html_e("Background Color","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="text" class="color_picker_shortcode" id="button_custom_bgcolor" />
		</div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("First Letter","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php esc_attr_e("First Letter of the Word","selements"); ?>" type="text" id="dropcp_first_letter" value="" name="dropcp_first_letter">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge"  id="dropcp_text" value="<?php esc_attr_e("This text area show all text.....","selements"); ?>" name="dropcp_text" type="text"></textarea>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="dropcp_class" value="" name="dropcp_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_drop" style="display: block;">
    	</div>
		</div>
  </form>
</div>
