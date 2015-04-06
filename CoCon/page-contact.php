<?php get_header(); ?>
<body>
		<div class='main_container'>
			<header>
					<h1>
						<a href='http://colouredconsultancy.nl'>Contact</a>
					</h1>
			</header>
			<div class='content'>
				<div class='box info'>
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
			</div>
			<nav class='bottomnav'>				
				<ul>
					<li><a href='over-cocon'>Over CoCon</a></li>
					<li><a href='nieuws'>Nieuws</a></li>
					<li><a href='contact'>Contact</a></li>
				</ul>				
			</nav>
<?php get_footer(); ?>