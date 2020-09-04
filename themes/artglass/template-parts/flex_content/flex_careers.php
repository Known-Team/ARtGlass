<?php 
/** Careers */ ?>

<div class="container-full pt-5 pb-5">
	<div class="row fullheight">
		<div class="col">
			<div class="container mt-5 mb-5">
				<div class="row mb-5">
					<div class="col-lg-6">
						<h6 class="mb-5 greentext"><?php the_sub_field('title'); ?></h6>
					</div>
					<div class="col-lg-6">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php if( have_rows('col_1') ): ?>
						    <?php while( have_rows('col_1') ): the_row(); ?>
						    	
						    	<a href="<?php the_sub_field('url'); ?>">
							    	<div class="row mb-4">
							    		<div class="col-8 nopadding">
									    	<h4><?php the_sub_field('date'); ?></h4>
									    	<h3><?php the_sub_field('career'); ?></h3>
								    	</div>
								    	<div class="col-4">
								    		<p><i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
								    	</div>
								    </div>
								</a>

						    <?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="col-lg-6">
						<?php if( have_rows('col_2') ): ?>
						    <?php while( have_rows('col_2') ): the_row(); ?>
						    	
						    	<a href="<?php the_sub_field('url'); ?>">
							    	<div class="row mb-4">
							    		<div class="col-8 nopadding">
									    	<h4><?php the_sub_field('date'); ?></h4>
									    	<h3><?php the_sub_field('career'); ?></h3>
								    	</div>
								    	<div class="col-4">
								    		<p><i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
								    	</div>
								    </div>
								</a>

						    <?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>