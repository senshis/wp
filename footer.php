<?php
/*
	my footer
*/
?>
<?php wp_footer(); ?>
</div>

<footer>

<?php if ( is_active_sidebar( 'bottom_bar' ) ) : ?>
	<div id="bottom_bar" class="bottom_bar widget-area" role="complementary">
		<?php dynamic_sidebar( 'bottom_bar' ); ?>
	</div><!-- bottom bar -->
<?php endif; ?>

</footer>

</body>
</html>