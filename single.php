<?php
	get_header();
?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				
				while( have_posts()){
					the_post();
				 
					
					the_content();
					
					
			
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					
			}
			get_footer();
			?>
			
			