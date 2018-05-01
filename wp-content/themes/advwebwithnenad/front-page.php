<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage advwebwithnenad
 * @since advwebwithnenad 1.0
 */

get_header(); ?>

	<div id="primary" class="container content-area">

			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
                <div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="twitter link" class="soc-icon tw"></a>
					<a href="facebook link" class="soc-icon fb"></a>
					<a href="linkedin link" class="soc-icon ln"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View the Blog</a>
			<?php endwhile; ?>

			  <h3>This is front-page.php</h3>

			  <div class="jumbotron">
			    <h1>This is the Front Page of my experimental site</h1>
					<p>I break this site on a daily basis, whether I'm trying to or not!</p>
			  </div>
			</div>

			<div class="container featured-blogs">

				<div class="jumbotron">
					<h3>Featured Blogs</h3>

			</div>

<?php get_footer(); ?>
