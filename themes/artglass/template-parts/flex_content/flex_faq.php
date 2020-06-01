<?php 
/** FAQ Element Template */


$backgroundColor = get_sub_field('flex_faq_background_color');
$title = get_sub_field('flex_faq_title');

if( have_rows('flex_faq_content') ):
    while ( have_rows('flex_faq_content') ) : the_row();
        $question = get_sub_field('flex_faq_content_question');
        $answer = get_sub_field('flex_faq_content_answer');
        // Do something...
    endwhile;
else :
    // no rows found
endif;

?>