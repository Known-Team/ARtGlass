<?php 
/** Callout Element Template */

$backgroundColor = get_sub_field('flex_callout_background');
$backgroundType = get_sub_field('flex_callout_background_type');
$title = get_sub_field('flex_callout_title');
$text = get_sub_field('flex_callout_text');
$link = get_sub_field('flex_callout_link');

if ($backgroundType == 'image') {
    $backgroundImage = get_sub_field('flex_callout_background_image');
    }


?>