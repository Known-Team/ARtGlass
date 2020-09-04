<?php 
/** Two Column */ ?>

<?php 

if( get_sub_field('background_color') == 'darkgray' ) { ?>

	<div class="container-full bgimg-center darkbg pt-5 pb-5">
		<div class="row fullheight">
			<div class="col">
				<div class="container mt-5 mb-5">
					<div class="row mb-5">
						<div class="col-lg-6">
							<h6 class="mb-5 greentext"><?php the_sub_field('flex_faq_title'); ?></h6>
						</div>
						<div class="col-lg-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php if( have_rows('col_1') ): ?>
							    <?php while( have_rows('col_1') ): the_row(); ?>
							    	
							    	<p class="accordion bold grayaccordian"><?php the_sub_field('question'); ?></p>
									<div class="panel mb-3"><p class="grayaccordian"><?php the_sub_field('answer'); ?></p></div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-6">
							<?php if( have_rows('col_2') ): ?>
							    <?php while( have_rows('col_2') ): the_row(); ?>
							    	
							    	<p class="accordion bold grayaccordian right"><?php the_sub_field('question'); ?></p>
									<div class="panel mb-3"><p class="grayaccordian"><?php the_sub_field('answer'); ?></p></div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php }; ?>

<?php 

if( get_sub_field('background_color') == 'lime' ) { ?>

	<div class="container-full bgimg-center limebg pt-5 pb-5">
		<div class="row fullheight">
			<div class="col">
				<div class="container mt-5 mb-5">
					<div class="row mb-5">
						<div class="col-lg-6">
							<h6 class="mb-5"><?php the_sub_field('flex_faq_title'); ?></h6>
						</div>
						<div class="col-lg-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php if( have_rows('col_1') ): ?>
							    <?php while( have_rows('col_1') ): the_row(); ?>
							    	
							    	<p class="accordion bold limeaccordian"><?php the_sub_field('question'); ?></p>
									<div class="panel mb-3"><p class="limeaccordian"><?php the_sub_field('answer'); ?></p></div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-6">
							<?php if( have_rows('col_2') ): ?>
							    <?php while( have_rows('col_2') ): the_row(); ?>
							    	
							    	<p class="accordion bold limeaccordian"><?php the_sub_field('question'); ?></p>
									<div class="panel mb-3"><p class="limeaccordian"><?php the_sub_field('answer'); ?></p></div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php }; ?>

<?php 

if( get_sub_field('background_color') == 'white' ) { ?>

	<div class="container-full bgimg-center pt-5 pb-5">
		<div class="row fullheight">
			<div class="col">
				<div class="container mt-5 mb-5">
					<div class="row mb-5">
						<div class="col-lg-6">
							<h6 class="mb-5 greentext"><?php the_sub_field('flex_faq_title'); ?></h6>
						</div>
						<div class="col-lg-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php if( have_rows('col_1') ): ?>
							    <?php while( have_rows('col_1') ): the_row(); ?>
							    	
							    	<p class="accordion bold whiteaccordian"><?php the_sub_field('question'); ?></p>
									<div class="panel mb-3"><p class="whiteaccordian"><?php the_sub_field('answer'); ?></p></div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="col-lg-6">
							<?php if( have_rows('col_2') ): ?>
							    <?php while( have_rows('col_2') ): the_row(); ?>
							    	
							    	<p class="accordion bold whiteaccordian"><?php the_sub_field('question'); ?></p>
									<div class="panel mb-3"><p class="whiteaccordian"><?php the_sub_field('answer'); ?></p></div>

							    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php }; ?>