<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.color_picker_button').wpColorPicker();
	});
</script>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Default Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="buttonstyle" name="buttonstyle">
					<option selected="selected" value="btn-primary"><?php esc_html_e("Royal Blue","selements"); ?></option>
					<option value="btn-default"><?php esc_html_e("Green","selements"); ?></option>
					<option value="btn-secondary"><?php esc_html_e("violet","selements"); ?></option>
					<option value="btn-info"><?php esc_html_e("Sky Blue","selements"); ?></option>
					<option value="btn-success"><?php esc_html_e("Light Green","selements"); ?></option>
					<option value="btn-danger"><?php esc_html_e("Red","selements"); ?></option>
					<option value="btn-indigo"><?php esc_html_e("Indigo","selements"); ?></option>
					<option value="btn-cyan"><?php esc_html_e("Cyan","selements"); ?></option>
					<option value="btn-pink"><?php esc_html_e("Pink","selements"); ?></option>
					<option value="btn-warning"><?php esc_html_e("Orange","selements"); ?></option>
					<option value="peach-gradient"><?php esc_html_e("Peach(gradient)","selements"); ?></option>
					<option value="purple-gradient"><?php esc_html_e("Purple(gradient)","selements"); ?></option>
					<option value="blue-gradient"><?php esc_html_e("Blue(gradient)","selements"); ?></option>
					<option value="aqua-gradient"><?php esc_html_e("Aqua(gradient)","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Custom Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" class="color_picker_button" id="button_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Button Border","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="border" name="border">
					<option selected="selected" value="btn-rounded"><?php esc_html_e("Round","selements"); ?></option>
					<option value="no-border"><?php esc_html_e("Square","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Size","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="size" name="size">
					<option selected="selected" value="btn-lg"><?php esc_html_e("Large","selements"); ?></option>
					<option value="btn-md"><?php esc_html_e("Small","selements"); ?></option>
					<option value="btn-sm"><?php esc_html_e("Mini","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Target","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" name="target" id="target" size="1">
					<option value="self" selected="selected"><?php esc_html_e("Self","selements"); ?></option>
					<option value="blank"><?php esc_html_e("Blank","selements"); ?></option>
				</select>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("Link","selements"); ?></label>
      </div>
      <div class="col-75">
				<input class="input-medium" placeholder="http://facebook.com" type="text" id="button-link" value="" name="button-link">
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Button Text","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="Button Name" type="text" id="button-text" value="<?php esc_attr_e("Button Here","selements"); ?>" name="button-text">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="button_class" value="" name="button_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_button" style="display: block;">
    	</div>
		</div>
  </form>
</div>
