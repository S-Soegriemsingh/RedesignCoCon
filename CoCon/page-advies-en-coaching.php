<?php get_header(); ?>
<body>
		<div class='main_container'>
			<header>
					<h1>
						<a href='http://colouredconsultancy.nl'>Advies &amp; Coaching</a>
					</h1>
			</header>
			<div class='content'>
				<div class='box info'>
					<?php
						// The Query
						query_posts( array ( 'category_name' => 'Advies-en-coaching', 'posts_per_page' => -1 ) );
					?>

					<?php
						// The Loop
						while ( have_posts() ) : the_post();
							echo '<h2>';
							the_title();
							echo '</h2>';
							the_content( $more_link_text , $strip_teaser );
							echo '</p><hr />';
						endwhile; 
					?>

					<?php
						// Reset Query
						wp_reset_query();
					?>
				</div>
				<div class='box image'>
					<?php
						// The Query
						query_posts( array ( 'category_name' => 'Advies-en-coaching-img', 'posts_per_page' => -1 ) );
					?>

					<?php
						// The Loop
						while ( have_posts() ) : the_post();
							the_content( $more_link_text , $strip_teaser );
						endwhile; 
					?>

					<?php
						// Reset Query
						wp_reset_query();
					?>
				</div>
				<div class='box testimonials'>
					<?php
						// The Query
						query_posts( array ( 'category_name' => 'Advies-en-coaching-testimonial', 'posts_per_page' => -1 ) );
					?>

					<?php
						// The Loop
						while ( have_posts() ) : the_post();
							echo '<h2>';
							the_title();
							echo '</h2>';
							the_content( $more_link_text , $strip_teaser );
							echo '</p><hr />';
						endwhile; 
					?>

					<?php
						// Reset Query
						wp_reset_query();
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