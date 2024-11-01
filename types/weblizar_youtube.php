<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Youtube Video-ID","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Youtube-video-ID example:-(6ZfuNTqbHE8)","selements"); ?>" type="text" id="you_url" value="" name="you_url">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Width","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="youtube_width" oninput="outputt.value = youtube_width.value">
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
				<output id="outputt" for="youtube_width"><?php esc_html_e("600","selements"); ?></output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Height","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="youtube_height" oninput="output.value = youtube_height.value">
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
				<output id="output" for="youtube_height"><?php esc_html_e("400","selements"); ?></output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Responsive","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_responsive" name="y_responsive" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Controls","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="align" id="y_controls" class="y_controls">
				<option value="0"><?php esc_html_e("Hide Controls","selements"); ?></option>
				<option value="1" selected="selected"><?php esc_html_e("Show Controls","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("AutoHide","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="align" id="y_autohide" class="y_autohide">
					<option value="0"><?php esc_html_e("Do Not Hide Controls","selements"); ?></option>
					<option value="1" selected="selected"><?php esc_html_e("Hide all Controls on mouse out","selements"); ?></option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Show Title Bar","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_title" name="y_title" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Autoplay","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_autoplay" name="y_autoplay" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("Loop","selements"); ?></label>
      </div>
      <div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_loop" name="y_loop" checked>
					<span class="slider round"></span>
				</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Show Fullscreen Button","selements"); ?></label>
      </div>
      <div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_fullscreen" name="y_fullscreen" checked>
					<span class="slider round"></span>
				</label>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("modestbranding","selements"); ?></label>
			</div>
			<div class="col-75">
				<label class="switch">
					<input type="checkbox" id="y_branding" name="y_branding" checked>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Theme","selements"); ?></label>
      </div>
      <div class="col-75">
				<select name="align" id="y_theme" class="y_theme">
					<option value="dark"><?php esc_html_e("Dark","selements"); ?></option>
					<option value="light" selected="selected"><?php esc_html_e("Light","selements"); ?></option>
				</select>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"<?php esc_html_e(">Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="y_class" value="" name="y_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_youtube" style="display: block;">
    	</div>
		</div>
  </form>
</div>
