<?php 
/** Two Column Featured Projects Carousel Element Template */

$carouselTitle = get_sub_field('flex_two_column_featured_carousel_title');

if( have_rows('flex_two_column_featured_carousel_content') ):
    while ( have_rows('flex_two_column_featured_carousel_content') ) : the_row();
        $title = get_sub_field('flex_two_column_featured_carousel_content_title');
        $text = get_sub_field('flex_two_column_featured_carousel_content_paragraph');
        $image = get_sub_field('flex_two_column_featured_carousel_content_image');
        $buttonType = get_sub_field('flex_two_column_featured_carousel_content_button_type');

        if ($buttonType == 'none') {

        }

        else if ($buttonType == 'play'){
            $playButton = get_sub_field('flex_two_column_featured_carousel_content_play');
        }

        else {
            $linkButton = get_sub_field('flex_two_column_featured_carousel_content_link');
        }

    endwhile;
else :
    // no rows found
endif;

?>