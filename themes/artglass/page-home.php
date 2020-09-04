<?php
/*
 * Template Name: Home Template
 */



get_header();
?>

<main id="primary" class="site-main">
	<div class="container-full bgimg-center homeheight" style="background-image: url('<?php the_field('background_image'); ?>')">
		<div class="row fullheight align-items-center">
			<div class="col">
				<div class="container">
					<div class="row mt-5">
						<div class="col-lg">
						</div>
						<div class="col-lg-10">
							<h2 class="mb-3"><?php the_field('small_text'); ?></h2>
							<h1><?php the_field('large_text'); ?></h1>

							<?php if( have_rows('button') ): ?>
							    <?php while( have_rows('button') ): the_row(); ?>
							    	<p class="center mt-5">
							    		<a class="homebutton" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a>
							    	</p>
							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="col-lg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main><!-- #main -->

<footer id="colophon" class="site-footer">
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>