<?php get_header(); ?>
<body>
		<div class='main_container'>
			<header>
					<h1>
						<a href='index.php'>Jongeren lossen het op</a>
					</h1>
			</header>
			<div class='content'>
				<div class='box info'>
					<h2>Content</h2>
					<p>stuff</p>

					<?php
						// The Query
						query_posts( array ( 'category_name' => 'Jolo', 'posts_per_page' => -1 ) );
					?>

					<?php
						// The Loop
						while ( have_posts() ) : the_post();
							echo '<h1>';
							the_title();
							echo '</h1>';
							the_content( $more_link_text , $strip_teaser );
							echo '</p>';
						endwhile; 
					?>

					<?php
						// Reset Query
						wp_reset_query();
					?>

				</div>
				<div class='box image'>
					<h2>Image</h2>
					<p>stuff</p>
				</div>
				<div class='box testimonials'>
					<h2>Testimonials</h2>
					<p>stuff</p>
				</div>
			</div>
			<nav>				
				<ul>
					<li><a href='over-jolo'>Over Jolo</a></li>
					<li><a href='jolo-nieuws'>Nieuws</a></li>
					<li><a href='contact'>Contact</a></li>
				</ul>				
			</nav>
<?php get_footer(); ?>