<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="lname"><?php esc_html_e("Alert Type","selements"); ?></label>
      </div>
      <div class="col-75">
				<select class="select-medium" size="1" id="alert_style" name="alert_style">
				<option value="weblizar_alert_success" selected="selected"><?php esc_html_e("Success","selements"); ?></option>
				<option value="weblizar_alert_error"><?php esc_html_e("Error","selements"); ?></option>
				<option value="weblizar_alert_warning"><?php esc_html_e("Warning","selements"); ?></option>
				<option value="weblizar_alert_info"><?php esc_html_e("Info","selements"); ?></option>
				</select>
			</div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="lname"><?php esc_html_e("Title","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="" type="text" id="alert_heading" value="" name="alert_heading">
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge" rows="8"  id="alert_text" value="This text area show all text....." name="alert_text" type="text"><?php esc_html_e("This text area show all text.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="alert_class" value="" name="alert_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_alert" style="display: block;">
    	</div>
		</div>
  </form>
</div>
