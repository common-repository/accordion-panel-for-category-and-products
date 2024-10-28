<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly    
	$params = $_REQUEST;   
	$_total = ( isset( $params["total"] ) ? intval( $params["total"] ) : 0 );
	$category_id = ( isset( $params["category_id"] ) ? intval( $params["category_id"] ) : 0 );  
	$_limit_start =( isset( $params["limit_start"] ) ? intval( $params["limit_start"] ) : 0 );
	$_limit_end = intval( $params["number_of_product_display"] ); 
	$all_pg = ceil( $_total / intval( $params["number_of_product_display"] ) );
	$cur_all_pg =ceil( ( $_limit_start ) / intval( $params["number_of_product_display"] ) ); 
	?><script language='javascript'>
			var request_obj_<?php echo esc_js( $params["vcode"] ); ?> = { 
			category_id:'<?php echo esc_js( $params["category_id"] ); ?>',  
			hide_product_price:'<?php echo esc_js( $params["hide_product_price"] ); ?>', 
			hide_product_title:'<?php echo esc_js( $params["hide_product_title"] ); ?>',
			product_price_color:'<?php echo esc_js( $params["product_price_color"] ); ?>', 
			product_title_color:'<?php echo esc_js( $params["product_title_color"] ); ?>', 
			price_tab_text_color:'<?php echo esc_js( $params["price_tab_text_color"] ); ?>', 
			price_tab_background_color:'<?php echo esc_js( $params["price_tab_background_color"] ); ?>', 
			header_text_color:'<?php echo esc_js( $params["header_text_color"] ); ?>', 
			header_background_color:'<?php echo esc_js( $params["header_background_color"] ); ?>',
			display_title_price_over_image:'<?php echo esc_js( $params["display_title_price_over_image"] ); ?>',
			number_of_product_display:'<?php echo esc_js( $params["number_of_product_display"] ); ?>',
			vcode:'<?php echo esc_js( $params["vcode"] ); ?>'
		}
	</script><?php
	$_total_products = $this->getTotalProducts( $category_id, 1, 0 );
	if( $_total_products <= 0 ) {
		?><div class="ik-product-no-items"><?php echo __( 'No products found.', 'categoryaccordionpanel' ); ?></div><?php
		die();
	}
	foreach( $_result_items as $_product ) {
		$image = $this->getProductImage( $_product->product_image );  
		?>
		<div class='ik-product-item pid-<?php echo esc_attr( $_product->product_id ); ?>'> 
			<div class='ik-product-image' onmouseout="acp_pr_item_image_mouseout(this)" onmouseover="acp_pr_item_image_mousehover(this)"> 
				<a href="<?php echo get_permalink( $_product->product_id ); ?>">
					<div class="ov-layer">
						 <?php if( sanitize_text_field( $params["display_title_price_over_image"] )=='yes' ) { ?> 
								<div class='ik-overlay-product-content'>
									<?php if( sanitize_text_field( $params["hide_product_title"] ) =='no' ) { ?> 
										<div class='ik-product-name' style="color:<?php echo esc_attr( $params["product_title_color"] ); ?>" >
											<?php echo esc_html( $_product->product_name ); ?>
										</div>
									<?php } ?>	
									
									<?php if( sanitize_text_field( $params["hide_product_price"] )=='no' ) { ?> 
										<div class='ik-product-sale-price' style="color:<?php echo esc_attr( $params["product_price_color"] ); ?>" >
											<?php echo get_woocommerce_currency_symbol().$_product->sale_price; ?>
										</div>
									<?php } ?>
									<?php  if( $_product->post_type == "product" ) { ?>
										<?php echo do_shortcode("[add_to_cart show_price='false' style='' id = '".$_product->product_id."']"); ?>
									<?php } ?>
									<div class="clr"></div>
								</div>
								<div class="clr"></div>
						<?php } ?> 
					</div>
					<div class="clr"></div>
				</a>
				<a href="<?php echo get_permalink( $_product->product_id ); ?>">	 
					<?php echo $image; ?>
				 </a>  
			</div>  
			<?php if(sanitize_text_field( $params["display_title_price_over_image"] )=='no'){ ?> 
				<div class='ik-product-content'>
					<?php if(sanitize_text_field( $params["hide_product_title"] )=='no'){ ?> 
						<div class='ik-product-name'>  
							<a href="<?php echo get_permalink($_product->product_id); ?>" style="color:<?php echo esc_attr( $params["product_title_color"] ); ?>" >
									<?php echo esc_html( $_product->product_name ); ?>
							 </a>	 
						</div>
					<?php } ?>	 
					<?php if( sanitize_text_field( $params["hide_product_price"] ) =='no' ) { ?> 
						<div class='ik-product-sale-price' style="color:<?php echo esc_attr( $params["product_price_color"] ); ?>">
							<?php echo get_woocommerce_currency_symbol().$_product->sale_price; ?>
						</div>
					<?php } ?>	
					<?php  if( $_product->post_type == "product" ){ ?>
						<?php echo do_shortcode("[add_to_cart show_price='false' style='' id = '".$_product->product_id."']"); ?>
					<?php } ?>
				</div>	
			<?php } ?> 
		</div> 
		<?php 
	}  
	if( ( $all_pg ) >= $cur_all_pg + 2 ) {
		?>
			<div class="clr"></div>
			<div class='ik-product-load-more' align="center" onclick='ACP_loadMoreProducts(<?php echo esc_js( $category_id ); ?>, "<?php echo esc_js( $_limit_start+$_limit_end ); ?>","<?php echo esc_js( $params["vcode"]."-".$category_id ); ?>","<?php echo esc_js( $_total ); ?>",request_obj_<?php echo esc_js( $params["vcode"] ); ?>)'>
				<?php echo __( 'Load More', 'categoryaccordionpanel' ); ?>
			</div>
		<?php
	} else {
		?><div class="clr"></div><?php
	}