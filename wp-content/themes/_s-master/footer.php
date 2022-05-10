<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */


?>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php if(is_active_sidebar('sidebar-1')) : ?>
          <div class="widget_area" role="complementary">
              <?php dynamic_sidebar("sidebar-1")?>
          </div>
        <?php endif; ?>

		<div class="site-info">

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
