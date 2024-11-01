<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Style","selements"); ?></label>
			</div>
			<div class="col-75">
				<select id="divider_style" name="divider_style">
					<option selected="selected" value="solid"><?php esc_html_e("simple","selements"); ?></option>
					<option value="dashed"><?php esc_html_e("Dashed","selements"); ?></option>
					<option value="double"><?php esc_html_e("Double","selements"); ?></option>
					<option value="dotted"><?php esc_html_e("Dotted","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="5" step="1" list="tickmarks" id="divider_height" oninput="outputt.value = divider_height.value">
				<datalist id="tickmarks">
					<option value="0 to 20"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("20","selements"); ?></option>
					<option><?php esc_html_e("40","selements"); ?></option>
					<option><?php esc_html_e("60","selements"); ?></option>
					<option><?php esc_html_e("80","selements"); ?></option>
					<option><?php esc_html_e("100","selements"); ?></option>
				</datalist>
				<span>
				<output id="outputt" for="divider_height">5</output></span> <!-- Just to display selected value -->
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Margin","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="40" step="1" list="tickmarks" id="divider_margin" oninput="output.value = divider_margin.value">
				<datalist id="tickmarks">
					<option value="0 to 20"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("20","selements"); ?></option>
					<option><?php esc_html_e("40","selements"); ?></option>
					<option><?php esc_html_e("60","selements"); ?></option>
					<option><?php esc_html_e("80","selements"); ?></option>
					<option><?php esc_html_e("100","selements"); ?></option>
				</datalist>
				<span>
				<output id="output" for="divider_margin"><?php esc_html_e("40","selements"); ?></output></span> <!-- Just to display selected value -->
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="divider_class" class="divider_class" placeholder="<?php esc_attr_e("Your extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
        <input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_divider" style="display: block;">
    	</div>
		</div>
  </form>
</div>
