<?php 
/** Services Element Template */

if( have_rows('flex_service_content') ):
    while ( have_rows('flex_service_content') ) : the_row();
        $title = get_sub_field('flex_service_content_title');
        $icon = get_sub_field('flex_service_content_icon');
        $text = get_sub_field('flex_service_content_paragraph');
        $backgroundImage = get_sub_field('flex_service_content_background_image');
    endwhile;
else :
    // no rows found
endif;

?>