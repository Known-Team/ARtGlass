<?php 
/** CPT Pull */ ?>

<?php $cptpull = get_sub_field('type_of_content');
if( $cptpull && in_array('ourteam', $cptpull) ) { ?>

<?php 

	// get posts
	$posts = get_posts(array(
		'post_type'			=> 'team',
		'posts_per_page'	=> -1,
	));

	if( $posts ): ?>

		<div class="container-full">
			<div class="row">
				<div class="col">
					<div class="container">

						<div class="row mb-5 mt-5">

							<?php foreach( $posts as $post ): 
				
							setup_postdata( $post )
							
							?>
							
								<div class="col-lg-4 mb-5">
									<div class="bgimg-center post-circle-image mb-5" style="background-image: url('<?php the_field('team_image'); ?>')"></div>
									<h4 class="center mb-2"><?php the_field('team_position'); ?></h4>
									<h3 class="mb-2 center"><?php the_field('team_name'); ?></h3>
									<p class="center"><?php the_field('team_description'); ?></p>
								</div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php endif; ?>

<?php }; ?>

<?php if( $cptpull && in_array('ourwork', $cptpull) ) { ?>

<?php 

	// get posts
	$posts = get_posts(array(
		'post_type'			=> 'work',
		'posts_per_page'	=> -1,
	));

	if( $posts ): ?>

		<div class="container-full">
			<div class="row mb-5 mt-5">
				<div class="col">
					<div class="container">

						<div class="row mb-5 mt-5">
							<div class="col-lg-4">
								<h6 class="mb-3 greentext"><?php the_sub_field('title'); ?></h6>
								<p class="mb-5"><?php the_sub_field('description'); ?></p>
							</div>
							<div class="col-lg-8">
							</div>
						</div>

						<div class="row mb-5 mt-5">

							<?php foreach( $posts as $post ): 
				
							setup_postdata( $post )
							
							?>

							<?php $type = get_field('work_type'); ?>
							
								<div class="col-lg-4 mb-5">
									<div class="bgimg-center post-circle-image mb-5" style="background-image: url('<?php the_field('work_image'); ?>')"></div>
									<h4 class="center mb-2"><?php echo esc_html($type['label']); ?></h4>
									<h3 class="mb-2 center"><?php the_field('work_client'); ?></h3>
								</div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>

						</div>
					</div>
				</div>
			</div>
		</div>

<?php endif; ?>

<?php }; ?>
