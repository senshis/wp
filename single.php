<?php
	getheader();
?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				
				while( have_posts()){
					the_post();
				 }
					
					get_template_part( 'content', get_post_format() );
					
					mytheme_post_nav();
			
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					
			
			getfooter();
			?>
			
			