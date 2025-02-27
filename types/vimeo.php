<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("Vimeo Video URL","selements"); ?></label>
      </div>
      <div class="col-75">
        <input class="input-medium" placeholder="<?php esc_attr_e("video url","selements"); ?>" type="text" id="v_url" value="" name="v_url">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Width","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="vimeo_width" oninput="outputt.value = vimeo_width.value">
				<datalist id="tickmarks">
					<option value="0 to 200"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("200","selements"); ?></option>
					<option><?php esc_html_e("400","selements"); ?></option>
					<option><?php esc_html_e("600","selements"); ?></option>
					<option><?php esc_html_e("800","selements"); ?></option>
					<option><?php esc_html_e("1000","selements"); ?></option>
					<option><?php esc_html_e("1200","selements"); ?></option>
					<option><?php esc_html_e("1400","selements"); ?></option>
					<option><?php esc_html_e("1600","selements"); ?></option>
				</datalist>
				<span>
				<output id="outputt" for="vimeo_width"><?php esc_html_e("600","selements"); ?></output></span>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="vimeo_height" oninput="output.value = vimeo_height.value">
				<datalist id="tickmarks">
					<option value="0 to 200"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("Height","selements"); ?></option>
					<option><?php esc_html_e("400","selements"); ?></option>
					<option><?php esc_html_e("600","selements"); ?></option>
					<option><?php esc_html_e("800","selements"); ?></option>
					<option><?php esc_html_e("1000","selements"); ?></option>
					<option><?php esc_html_e("1200","selements"); ?></option>
					<option><?php esc_html_e("1400","selements"); ?></option>
					<option><?php esc_html_e("1600","selements"); ?></option>
				</datalist>
				<span>
				<output id="output" for="vimeo_height"><?php esc_html_e("400","selements"); ?></output></span> <!-- Just to display selected value -->
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Autoplay","selements"); ?></label>
      </div>
      <div class="col-75">
				<label class="switch">
					<input type="checkbox" id="v_autoplay" name="v_autoplay" checked>
					<span class="slider round"></span>
				</label>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="v_class" value="" name="v_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_vimeo" style="display: block;">
    	</div>
		</div>
  </form>
</div>
