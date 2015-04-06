<?php get_header(); ?>
<body>
		<div class='main_container'>
			<header>
					<h1>
						<a href='index.php'>Van conflict naar contact</a>
					</h1>
			</header>
			<div class='content'>
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( the_content( $more_link_text , $strip_teaser ) );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					// End the loop.
					endwhile;
				?>
			</div>
			<nav>				
				<ul>
					<li><a href='over-cocon'>Over CoCon</a></li>
					<li><a href='jolo-nieuws'>Nieuws</a></li>
					<li><a href='contact'>Contact</a></li>
				</ul>				
			</nav>
<?php get_footer(); ?>