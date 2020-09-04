<?php /** Services */ ?>

<div class="container-full">
	<div class="row">

		<?php if( have_rows('service') ): ?>
		    <?php while( have_rows('service') ): the_row(); ?>
		    	<div class="col-lg-3" style="background-image: url('<?php the_sub_field('bg_image'); ?>')">

					<div>
						<p><?php the_sub_field('icon'); ?></p>
						<p><?php the_sub_field('service_name'); ?></p>
					</div>

				</div>
		    <?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>