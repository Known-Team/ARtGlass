<?php 
/** Two Column with Text and Circle Element Template */ ?>



	<div class="container-full bgimg-center" style="background-image: url('<?php the_sub_field('background_image'); ?>')">
		<div class="overlay-image pt-5 pb-5" style="background-image: url('<?php the_sub_field('background_image_overlay'); ?>')">
			<div class="row fullheight">
				<div class="col">
					<div class="container mt-5 mb-5">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h6 class="mb-3 whitetext"><?php the_sub_field('title'); ?></h6>
								<p class="whitetext"><?php the_sub_field('paragraph'); ?></p>
							</div>
							<div class="col-lg-6">
								<div class="bgimg-center circle-image" style="background-image: url('<?php the_sub_field('circle_image'); ?>')">
								</div>
								<?php if( have_rows('button') ): ?>
								    <?php while( have_rows('button') ): the_row(); ?>
								    	<p class="center mt-5">
								    		<a class="homebutton" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('text'); ?></a>
								    	</p>
								    <?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>