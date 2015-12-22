<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caleighm
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<img src="http://i68.tinypic.com/igf6l3.jpg" class="widget-img" alt-text="Caleigh is busking!">
		
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
