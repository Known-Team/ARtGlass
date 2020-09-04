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
							<h6 class="mb-5 greentext"><?php the_sub_field('title'); ?></h6>
						</div>
						<div class="col-lg-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p class="whitetext"><?php the_sub_field('paragraph_1'); ?></p>
						</div>
						<div class="col-lg-6">
							<p class="whitetext"><?php the_sub_field('paragraph_2'); ?></p>
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
							<h6 class="mb-5"><?php the_sub_field('title'); ?></h6>
						</div>
						<div class="col-lg-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p><?php the_sub_field('paragraph_1'); ?></p>
						</div>
						<div class="col-lg-6">
							<p><?php the_sub_field('paragraph_2'); ?></p>
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
							<h6 class="mb-5 greentext"><?php the_sub_field('title'); ?></h6>
						</div>
						<div class="col-lg-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p><?php the_sub_field('paragraph_1'); ?></p>
						</div>
						<div class="col-lg-6">
							<p><?php the_sub_field('paragraph_2'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php }; ?>