<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly  ?> 
<table class="categoryaccordionpanel-admin categoryaccordionpanel-admin-widget" cellspacing="0" cellpadding="0">
	<tr> <td class="tp-label">
			<p><label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php echo __( 'Widget title', 'categoryaccordionpanel' ); ?>:</label></p>
	 	</td> 
		<td>
			<p>
				<input id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $instance['widget_title']; ?>"   />
			</p>
		</td>
	</tr>	 
	
	<tr>
		<td class="tp-label">
			<p><label for="<?php echo $this->get_field_id( 'category_id' ); ?>"><?php echo __( 'Category', 'categoryaccordionpanel' ); ?>:</label></p>
		</td>  
		<td>
				<?php $_category_res = $this->getCategories(); ?> 
				<?php  
					$_selected_categories = explode(",",$instance["category_id"]); 
					foreach( $_category_res as $_category_items ) { 
						$__chked = "";
						if( in_array( $_category_items->id, $_selected_categories ) ) {
							$__chked = "checked='true'";
						} 
						if( trim( $instance["category_id"] ) == "" || trim( $instance["category_id"] ) == "0" ) {
							$__chked = "checked='true'";
						}
						?>
						<p><input <?php echo $__chked; ?> class="checkbox-category-ids" type="checkbox" name="<?php echo $this->get_field_name( 'category_id' ); ?>[]" id="<?php echo $this->get_field_id( 'category_id' ); ?><?php echo $_category_items->id; ?>" value="<?php echo $_category_items->id; ?>"  onchange="ck_category_check(this)"  />
						<label for ="<?php echo $this->get_field_id( 'category_id' ); ?><?php echo $_category_items->id; ?>" ><?php echo $_category_items->category; ?></label></p>
		 	   <?php } ?> 
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'number_of_product_display' ); ?>"><?php echo __( 'Number of product display', 'categoryaccordionpanel' ); ?>:</label> </p> 
		</td>  
		<td>
			<p> 
				<input id="<?php echo $this->get_field_id( 'number_of_product_display' ); ?>" name="<?php echo $this->get_field_name( 'number_of_product_display' ); ?>" type="text" value="<?php echo $instance['number_of_product_display']; ?>"   />
			</p>
		</td>
	</tr>

	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'title_text_color' ); ?>"><?php echo __( 'Product title text color', 'categoryaccordionpanel' ); ?>:</label> </p> 
		</td>  
		<td>  
			<p> 
				<input class="color-field" id="<?php echo $this->get_field_id( 'title_text_color' ); ?>" name="<?php echo $this->get_field_name( 'title_text_color' ); ?>" type="text" value="<?php echo $instance['title_text_color']; ?>"   />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'price_text_color' ); ?>"><?php echo __( 'Product price text color', 'categoryaccordionpanel' ); ?>:</label> </p>
		</td>  
		<td> 
			<p> 
				<input class="color-field" id="<?php echo $this->get_field_id( 'price_text_color' ); ?>" name="<?php echo $this->get_field_name( 'price_text_color' ); ?>" type="text" value="<?php echo $instance['price_text_color']; ?>"   />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'price_tab_text_color' ); ?>"><?php echo __( 'Category tab text color', 'categoryaccordionpanel' ); ?>:</label> </p> 
		</td> 
		<td>
			<p> 
				<input class="color-field" id="<?php echo $this->get_field_id( 'price_tab_text_color' ); ?>" name="<?php echo $this->get_field_name( 'price_tab_text_color' ); ?>" type="text" value="<?php echo $instance['price_tab_text_color']; ?>"   />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'price_tab_background_color' ); ?>"><?php echo __( 'Category tab background color', 'categoryaccordionpanel' ); ?>:</label> </p>
		</td> 
		<td> 
			<p> 
				<input class="color-field" id="<?php echo $this->get_field_id( 'price_tab_background_color' ); ?>" name="<?php echo $this->get_field_name( 'price_tab_background_color' ); ?>" type="text" value="<?php echo $instance['price_tab_background_color']; ?>"   />
			</p>
		</td>
	</tr>

	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'header_text_color' ); ?>"><?php echo __( 'Widget title text color', 'categoryaccordionpanel' ); ?>:</label> </p>
		</td> 
		<td> 
			<p> 
				<input class="color-field" id="<?php echo $this->get_field_id( 'header_text_color' ); ?>" name="<?php echo $this->get_field_name( 'header_text_color' ); ?>" type="text" value="<?php echo $instance['header_text_color']; ?>"   />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'header_background_color' ); ?>"><?php echo __( 'Widget title background color', 'categoryaccordionpanel' ); ?>:</label> </p>
		</td> 
		<td>
			<p> 
				<input class="color-field" id="<?php echo $this->get_field_id( 'header_background_color' ); ?>" name="<?php echo $this->get_field_name( 'header_background_color' ); ?>" type="text" value="<?php echo $instance['header_background_color']; ?>"   />
			</p> 
		</td> 	
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'tp_widget_width' ); ?>"><?php echo __( 'Widget Width', 'categoryaccordionpanel' ); ?>:</label> </p>
		</td> 
		<td>   
			<p> 
				<input id="<?php echo $this->get_field_id( 'tp_widget_width' ); ?>" name="<?php echo $this->get_field_name( 'tp_widget_width' ); ?>" type="text" value="<?php echo $instance['tp_widget_width']; ?>"   />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'display_title_price_over_image' ); ?>"><?php echo __( 'Display title & price over image?', 'categoryaccordionpanel' ); ?></label> </p>
		</td> 
		<td>    
			<p> 
				<input type="radio" <?php echo ( $instance['display_title_price_over_image'] == "yes" ) ? ' checked="checked"' : ''; ?> value="yes" name="<?php echo $this->get_field_name( 'display_title_price_over_image' ); ?>" id="<?php echo $this->get_field_id( 'display_title_price_over_image' ); ?>_1" /> 
				<label for="<?php echo $this->get_field_id( 'display_title_price_over_image' ); ?>_1"><?php echo __( 'Yes', 'categoryaccordionpanel' ); ?></label>
				
				<input type="radio" <?php echo ( $instance['display_title_price_over_image'] == "no" ) ? ' checked="checked"' : ''; ?> value="no" name="<?php echo $this->get_field_name( 'display_title_price_over_image' ); ?>" id="<?php echo $this->get_field_id( 'display_title_price_over_image' ); ?>_2" />
				<label for="<?php echo $this->get_field_id( 'display_title_price_over_image' ); ?>_2"><?php echo __( 'No', 'categoryaccordionpanel' ); ?></label>
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'hide_widget_title' ); ?>"><?php echo __( 'Hide widget title?', 'categoryaccordionpanel' ); ?></label> </p>
		</td> 
		<td> 
			<p> 
				<input type="radio" <?php echo ( $instance['hide_widget_title'] == "yes" ) ? ' checked="checked"' : ''; ?> value="yes" name="<?php echo $this->get_field_name( 'hide_widget_title' ); ?>" id="<?php echo $this->get_field_id( 'hide_widget_title' ); ?>_1" />
				<label for="<?php echo $this->get_field_id( 'hide_widget_title' ); ?>_1"><?php echo __( 'Yes', 'categoryaccordionpanel' ); ?></label>	
				
				<input type="radio" <?php echo ( $instance['hide_widget_title'] == "no" ) ? ' checked="checked"' : ''; ?> value="no" name="<?php echo $this->get_field_name( 'hide_widget_title' ); ?>" id="<?php echo $this->get_field_id( 'hide_widget_title' ); ?>_2" />
				<label for="<?php echo $this->get_field_id( 'hide_widget_title' ); ?>_2"><?php echo __( 'No', 'categoryaccordionpanel' ); ?></label>
			</p>
		</td>
	</tr> 
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'hide_product_title' ); ?>"><?php echo __( 'Hide product title?', 'categoryaccordionpanel' ); ?></label> </p>
		</td>
		<td>  
			<p> 
				<input type="radio" <?php echo ( $instance['hide_product_title'] == "yes" ) ? ' checked="checked"' : ''; ?> value="yes" name="<?php echo $this->get_field_name( 'hide_product_title' ); ?>" id="<?php echo $this->get_field_id( 'hide_product_title' ); ?>_1" /> 
				<label for="<?php echo $this->get_field_id( 'hide_product_title' ); ?>_1"><?php echo __( 'Yes', 'categoryaccordionpanel' ); ?></label>
				
				<input type="radio" <?php echo ( $instance['hide_product_title'] == "no" ) ? ' checked="checked"' : ''; ?> value="no" name="<?php echo $this->get_field_name( 'hide_product_title' ); ?>" id="<?php echo $this->get_field_id( 'hide_product_title' ); ?>_2" />
				<label for="<?php echo $this->get_field_id( 'hide_product_title' ); ?>_2"><?php echo __( 'No', 'categoryaccordionpanel' ); ?></label>
			</p>
		</td>
	</tr>

	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'hide_product_price' ); ?>"><?php echo __( 'Hide product price?', 'categoryaccordionpanel' ); ?></label> </p>
		</td>
		<td>
			<p> 
				<input type="radio" <?php echo ( $instance['hide_product_price'] == "yes" ) ? ' checked="checked"' : ''; ?> value="yes" name="<?php echo $this->get_field_name( 'hide_product_price' ); ?>" id="<?php echo $this->get_field_id( 'hide_product_price' ); ?>_1" /> 
				<label for="<?php echo $this->get_field_id( 'hide_product_price' ); ?>_1"><?php echo __( 'Yes', 'categoryaccordionpanel' ); ?></label>
				
				<input type="radio" <?php echo ( $instance['hide_product_price'] == "no" ) ? ' checked="checked"' : ''; ?> value="no" name="<?php echo $this->get_field_name( 'hide_product_price' ); ?>" id="<?php echo $this->get_field_id( 'hide_product_price' ); ?>_2" />	
				<label for="<?php echo $this->get_field_id( 'hide_product_price' ); ?>_2"><?php echo __( 'No', 'categoryaccordionpanel' ); ?></label>
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="tp-label">
			<p> <label for="<?php echo $this->get_field_id( 'template' ); ?>"><?php echo __( 'Template', 'categoryaccordionpanel' ); ?>:</label> </p>
		</td>
		<td>
			<p> 
				<select id="<?php echo $this->get_field_id( 'template' ); ?>" name="<?php echo $this->get_field_name( 'template' ); ?>" >
					<option <?php echo ( ( $instance['template'] == 'pane_style_1' || $instance['template'] == '' ) ? "selected" : "" ); ?> value="pane_style_1"><?php echo __( 'Pane style 1', 'categoryaccordionpanel' ); ?></option>
					<option <?php echo ( ( $instance['template'] == 'pane_style_2' ) ? "selected" : "" ); ?> value="pane_style_2"><?php echo __( 'Pane style 2', 'categoryaccordionpanel' ); ?></option>
					<option <?php echo ( ( $instance['template'] == 'pane_style_3' ) ? "selected" : "" ); ?> value="pane_style_3"><?php echo __( 'Pane style 3', 'categoryaccordionpanel' ); ?></option>
					<option <?php echo ( ( $instance['template'] == 'pane_style_4' ) ? "selected" : "" ); ?> value="pane_style_4"><?php echo __( 'Pane style 4', 'categoryaccordionpanel' ); ?></option>
				</select>
			</p> 
		</td>
	</tr>
</table>
<input type="hidden" name="<?php echo $this->get_field_name( 'vcode' ); ?>" id="<?php echo $this->get_field_id( 'vcode' ); ?>" value="<?php echo $instance["vcode"]; ?>" /><br />