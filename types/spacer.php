<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Height","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="800" class="fontsizeh" value="20" step="1" list="tickmarks" id="spaceheight" oninput="outputt.value = spaceheight.value">
				<datalist id="tickmarks">
					<option value="0 to 20"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("20","selements"); ?></option>
					<option><?php esc_html_e("40","selements"); ?></option>
					<option><?php esc_html_e("60","selements"); ?></option>
					<option><?php esc_html_e("80","selements"); ?></option>
					<option><?php esc_html_e("100","selements"); ?></option>
					<option><?php esc_html_e("200","selements"); ?></option>
					<option><?php esc_html_e("300","selements"); ?></option>
					<option><?php esc_html_e("400","selements"); ?></option>
					<option><?php esc_html_e("500","selements"); ?></option>
					<option><?php esc_html_e("600","selements"); ?></option>
					<option><?php esc_html_e("700","selements"); ?></option>
					<option><?php esc_html_e("800","selements"); ?></option>
				</datalist>
				<span>
				<output id="outputt" for="spaceheight"><?php esc_html_e("20","selements"); ?></output></span>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="spacer_class" value="" name="spacer_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_spacer" style="display: block;">
    	</div>
		</div>
  </form>
</div>
