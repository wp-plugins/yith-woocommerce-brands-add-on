<?php
/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'YITH_WCBR' ) ) {
	exit;
} // Exit if accessed directly
?>
<tr class="form-field">
	<th scope="row" valign="top"><label><?php _e( 'Thumbnail', 'yith-wcbr' ); ?></label></th>
	<td>
		<div id="product_brand_thumbnail" style="float:left;margin-right:10px;"><img src="<?php echo $image; ?>" width="60px" height="60px" /></div>
		<div style="line-height:60px;">
			<input type="hidden" id="product_brand_thumbnail_id" class="yith_wcbr_upload_image_id" name="product_brand_thumbnail_id" value="<?php echo $thumbnail_id; ?>" />
			<button id="product_brand_thumbnail_upload" type="submit" class="yith_wcbr_upload_image_button button"><?php _e( 'Upload/Add image', 'yith-wcbr' ); ?></button>
			<button id="product_brand_thumbnail_remove" type="submit" class="yith_wcbr_remove_image_button button"><?php _e( 'Remove image', 'yith-wcbr' ); ?></button>
		</div>
		<div class="clear"></div>
	</td>
</tr>