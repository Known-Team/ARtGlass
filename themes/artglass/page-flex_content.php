<?php
/*
 * Template Name: Flexible Content
 */



get_header();
?>

<main id="primary" class="site-main">


<?php
/* Flex Content Pull */
	$id = get_the_ID();

	// check if the flexible content field has rows of data
	if ( have_rows( 'flex_content', $id ) ) :
	
		// loop through the selected ACF layouts and display the matching partial
		while ( have_rows( 'flex_content', $id ) ) : the_row();
	
			get_template_part( 'template-parts/flex_content/' . get_row_layout() );
	
		endwhile;
	
	elseif ( get_the_content() ) :
	
		// no layouts found
	
	endif;
/* End Flex Content Pull */
?>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
