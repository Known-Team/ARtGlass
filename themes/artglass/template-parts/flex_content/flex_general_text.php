<?php 
/** General Purpose Title and/or Text Element Template */


$title = get_sub_field('flex_general_text_title');
$backgroundColor = get_sub_field('flex_general_text_background');
$layout = get_sub_field('flex_general_text_layout');

if ($layout == 'one-left') {
    $text = get_sub_field('flex_general_text_one_left_paragraph');
    }

else if ($layout == 'one-center'){
    $text = get_sub_field('flex_general_text_one_center_paragraph');
}

else if ($layout == 'two-left') {
    $textOne = get_sub_field('flex_general_text_two_left_one_paragraph');
    $textTwo = get_sub_field('flex_general_text_two_left_two_paragraph');
    $imageOne = get_sub_field('flex_general_text_two_left_one_image');
    $imageTwo = get_sub_field('flex_general_text_two_left_two_image');
    $playOne = get_sub_field('flex_general_text_two_left_one_play');
    $playTwo = get_sub_field('flex_general_text_two_left_two_play');
    $linkOne = get_sub_field('flex_general_text_two_left_one_link');
    $linkTwo = get_sub_field('flex_general_text_two_left_two_link');
}

?>