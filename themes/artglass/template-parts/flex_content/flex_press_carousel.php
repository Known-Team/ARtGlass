<?php 
/** Press & News Posts Carousel Element Template */

if( have_rows('flex_press_carousel_content') ):
    while ( have_rows('flex_press_carousel_content') ) : the_row();
        $title = get_sub_field('flex_press_carousel_content_title');
        $image = get_sub_field('flex_press_carousel_content_image');
        $date = get_sub_field('flex_press_carousel_content_date');
        $publisher = get_sub_field('flex_press_carousel_content_publisher');
        $link = get_sub_field('flex_press_carousel_content_link');
    endwhile;
else :
    // no rows found
endif;

?>