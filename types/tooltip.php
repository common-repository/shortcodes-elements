<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("Tooltip  Type","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="tooltip_style" name="tooltip_style">
				<option value="top" selected="selected"><?php esc_html_e("Top","selements"); ?></option>
				<option value="left"><?php esc_html_e("Left","selements"); ?></option>
				<option value="bottom"><?php esc_html_e("Bottom","selements"); ?></option>
				<option value="right"><?php esc_html_e("Right","selements"); ?></option>
				</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Color","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="toolstyle" name="toolstyle">
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
				<input type="text" class="color_picker_shortcode" id="tooltip_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Border","selements"); ?></label>
			</div>
			<div class="col-75">
				<select class="select-medium" size="1" id="border_tool" name="border_tool">
					<option selected="selected" value="btn-rounded"><?php esc_html_e("Round","selements"); ?></option>
					<option value=""><?php esc_html_e("Square","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Tool tip Text","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Tool tip text","selements"); ?>" type="text" id="tooltip_text" value="" name="tooltip_text">
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Tool tip Hover Text","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php esc_attr_e("Tool tip hover text","selements"); ?>" type="text" id="tooltip_over_text" value="" name="tooltip_over_text">
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Class","selements"); ?>" type="text" id="tooltip_class" value="" name="tooltip_class">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
	      <input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_tooltip" style="display: block;">
    	</div>
		</div>
  </form>
</div>
