<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Progress Bar Title","selements"); ?></label>
      </div>
      <div class="col-75">
      <input class="input-medium" placeholder="<?php esc_attr_e("Progress Bar Title","selements"); ?>" type="text" id="progress_heading" value="" name="progress_heading">
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Progress Bar","selements"); ?> %</label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="50" step="1" list="tickmarks" id="progress_percentag" oninput="output.value = progress_percentag.value">
				<datalist id="tickmarks">
					<option value="0 to 20"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("20","selements"); ?></option>
					<option><?php esc_html_e("40","selements"); ?></option>
					<option><?php esc_html_e("60","selements"); ?></option>
					<option><?php esc_html_e("80","selements"); ?></option>
					<option><?php esc_html_e("100","selements"); ?></option>
				</datalist>
				<span>
				<output id="output" for="progress_percentag"><?php esc_html_e("50","selements"); ?></output></span> <!-- Just to display selected value -->
			</div>
		</div>
    <div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Custom Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" class="color_picker_shortcode" id="progress_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="progress_class" class="progress_class" placeholder="<?php esc_attr_e("Your extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_progress" style="display: block;">
    	</div>
		</div>
  </form>
</div>
