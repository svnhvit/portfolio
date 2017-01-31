<?php get_header(); ?>

<div class="single">

	<div class="container">

		<div class="row">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-xs-6">

				<h2><?php the_title(); ?></h2>


				<?php the_content(); ?>

				</div>


			<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>


		</div>

	</div>
	
</div>

<?php get_footer(); ?>