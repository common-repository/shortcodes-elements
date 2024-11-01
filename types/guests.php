<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea class="input-xlarge" rows="8"  id="guests_text" value="This text area show all text....." name="guests_text" type="text"><?php esc_html_e("This text area show all text.....","selements"); ?></textarea>
      </div>
    </div>
		<div class="row">
			<div class="col-25">
				<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
			</div>
			<div class="col-75">
				<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="guests_class" value="" name="guests_class"/>
			</div>
		</div>
    <div class="row">
			<div class="col-25">
      		<input type="" class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_guests" style="display: block;">
    	</div>
		</div>
  </form>
</div>
