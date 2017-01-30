<?php
/**
 * The main template file

 */

get_header(); ?>

<content>

<?php 

if ( have_posts() ) {
	while (have_posts()) : the_post(); 
	the_title();
	the_time('m/d/y/');
	if ($post->post_except) { 
		 echo $post->post_except; 
		 ?>
		 <a href="<?phpthe_permalink();?>">Read more..</a>
		 <?php
	 } else { ?>
		<p> 
			<?php the_content(); ?>
			<a href="<?phpthe_permalink();?>">Read more..</a>
		</p><?php
	}
		
	 
	
	endwhile; // end while
} // end if
else{
	echo "There are no posts.";
}

?>
<div class="pagination nav-previous"><?php next_posts_link('Older posts');?></div>
<div class="pagination nav-next"><?php previous_posts_link('Newer posts');?></div>

</content>

<aside>
<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</aside>


<?php
 get_footer();
 ?>

