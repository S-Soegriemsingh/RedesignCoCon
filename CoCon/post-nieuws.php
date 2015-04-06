<?php
/*
Single Post Template: Nieuws
Description: This part is optional, but helpful for describing the Post Template
*/

get_header(); 
?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".entry-content").css("background-color", "#ebbb4f");
			$(".entry-title").append( "<a href='http://www.colouredconsultancy.nl'>&nbsp;</a>" );
		});
	</script>

	<div id="primary" class="main_container">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
		// End the loop.
		endwhile;
		?>
		<?php get_footer(); ?>		
	</div>


