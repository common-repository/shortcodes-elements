<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
		<div class="row">
			<div class="col-25">
				<label for="country"><?php esc_html_e("Size","selements"); ?></label>
			</div>
			<div class="col-75">
				<select name="column-size" id="column-size" size="1">
	            <option value="col-md-6" selected="selected">1/2</option>
	            <option value="col-md-3">1/4</option>
				<option value="col-md-4">1/3</option>
	            <option value="col-md-8">2/3</option>
	            <option value="col-md-9">3/4</option>
				<option value="col-md-12"><?php esc_html_e("full width layout","selements"); ?></option>
        </select>
			</div>
		</div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><?php esc_html_e("Content","selements"); ?></label>
      </div>
      <div class="col-75">
        <textarea type="text" name="" rows="10" value="" id="column-content"></textarea>
      </div>
    </div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_col" style="display: block;">
    	</div>
		</div>
  </form>
</div>
