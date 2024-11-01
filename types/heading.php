<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("Title","selements"); ?></label>
      </div>
      <div class="col-75">
        <input type="text" name="heading_title" value="" id="heading_title" placeholder="<?php esc_attr_e("Your heading title","selements"); ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Font Size","selements"); ?></label>
      </div>
      <div class="col-75">
        <input type="range" min="0" max="100" class="fontsizeh" value="50" step="1" list="tickmarks" id="rangeInput" oninput="outputt.value = rangeInput.value">
				<datalist id="tickmarks">
					<option value="0 to 20">0</option>
					<option>20</option>
					<option>40</option>
					<option>60</option>
					<option>80</option>
					<option>100</option>
				</datalist>
				<span>
				<output id="outputt" for="rangeInput">50</output></span>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Font Weight","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="900" class="fontsizeh" value="0" step="1" list="tickmarks" id="weight" oninput="outputtt.value = weight.value">
				<datalist id="tickmarks">
					<option value="0 to 400"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("400","selements"); ?></option>
					<option><?php esc_html_e("500","selements"); ?></option>
					<option><?php esc_html_e("600","selements"); ?></option>
					<option><?php esc_html_e("800","selements"); ?></option>
					<option><?php esc_html_e("900","selements"); ?></option>
				</datalist>
				<span>
				<output id="outputtt" for="weight"><?php esc_html_e("0","selements"); ?></output></span>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Margin","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="range" min="0" max="100" value="50" step="1" list="tickmarks" id="margin" oninput="output.value = margin.value">
				<datalist id="tickmarks">
					<option value="0 to 20"><?php esc_html_e("0","selements"); ?></option>
					<option><?php esc_html_e("20","selements"); ?></option>
					<option><?php esc_html_e("40","selements"); ?></option>
					<option><?php esc_html_e("60","selements"); ?></option>
					<option><?php esc_html_e("80","selements"); ?></option>
					<option><?php esc_html_e("100","selements"); ?></option>
				</datalist>
				<span>
				<output id="output" for="margin"><?php esc_html_e("50","selements"); ?></output></span> <!-- Just to display selected value -->
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Align","selements"); ?></label>
      </div>
      <div class="col-75">
        <select name="align" id="su-generator-attr-align" class="su-generator-attr">
					<option value="left"><?php esc_html_e("Left","selements"); ?></option>
					<option value="center" selected="selected"><?php esc_html_e("Center","selements"); ?></option>
					<option value="right"><?php esc_html_e("Right","selements"); ?></option>
        </select>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Font Color","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" class="color_picker_shortcode" id="heading_custom_color" />
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input type="text" name="class" value="" id="extra-class" class="extra-class" placeholder="<?php esc_attr_e("Your extra class","selements"); ?>">
			</div>
		</div>
    <div class="row">
			<div class="col-25">
				<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="heading_insert" style="display: block;">
    	</div>
		</div>
  </form>
</div>

