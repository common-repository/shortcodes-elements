<script type="text/javascript">
	jQuery(document).ready(function() {
	 jQuery('#fun_icon').iconpicker();
	});
</script>
<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
		<div class="col-25">
			<label for="fname"><?php esc_html_e("Title","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php esc_attr_e("FunFact Title","selements"); ?>" type="text" id="fun_title" value="" name="fun_title"/>
		</div>
	</div>
    <div class="row">
		<div class="col-25">
			<label for="fname"><?php esc_html_e("Icon","selements"); ?></label>
		</div>
		 <div class="col-75">
		 <input class="icp demo" id="fun_icon"  value="fa-anchor" type="text">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="country"><?php esc_html_e("Icon Color","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="text" class="color_picker_shortcode" id="fact_custom_color" />
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php esc_html_e("Icon Size","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="range" min="10" max="128" class="fontsizeh" value="50" step="1" list="tickmarks" id="icon_size" oninput="outputtt.value = icon_size.value">
			<datalist id="tickmarks">
				<option value="0 to 10"><?php esc_html_e("10","selements"); ?></option>
				<option><?php esc_html_e("20","selements"); ?></option>
				<option><?php esc_html_e("30","selements"); ?></option>
				<option><?php esc_html_e("40","selements"); ?></option>
				<option><?php esc_html_e("50","selements"); ?></option>
				<option><?php esc_html_e("60","selements"); ?></option>
				<option><?php esc_html_e("70","selements"); ?></option>
				<option><?php esc_html_e("80","selements"); ?></option>
				<option><?php esc_html_e("90","selements"); ?></option>
				<option><?php esc_html_e("100","selements"); ?></option>
				<option><?php esc_html_e("110","selements"); ?></option>
				<option><?php esc_html_e("120","selements"); ?></option>
				<option><?php esc_html_e("128","selements"); ?></option>
			</datalist>
			<span>
			<output id="outputtt" for="icon_size"><?php esc_html_e("50","selements"); ?></output></span>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php esc_html_e("Value","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="FunFact Value" type="number" id="icon_value" value="" name="icon_value"/>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php esc_html_e("Content","selements"); ?></label>
		</div>
		<div class="col-75">
			<textarea class="service_contnt" placeholder="Your Content" id="fun_contnt" value="" name="fun_contnt"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="fun_class" value="" name="fun_class"/>
		</div>
	</div>
    <div class="row">
	<div class="col-25">
		<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_fact" style="display: block;">
	</div>
	</div>
  </form>
</div>
