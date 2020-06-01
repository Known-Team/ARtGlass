<?php 
/** Hero Image Element Template */

$backgroundGallery = get_sub_field('flex_background_image');

if (count($backgroundGallery) == 1) {
    $carousel = False;
    $backgroundImage = $backgroundGallery[0];
}

else {
    $carousel = True;
}

$largeText = get_sub_field('flex_hero_large_text');
$smallText = get_sub_field('flex_hero_small_text');
$scrollArrow = get_sub_field('flex_hero_arrow'); //returns a boolean
$buttonType = get_sub_field('flex_hero_button_type');

if ($buttonType == 'none'){
    }

else if ($buttonType == 'center_play'){
    $centerPlayButton = get_sub_field('flex_hero_center_play');
    }   

else if ($buttonType == 'bottom_play'){
    $bottomPlayButton = get_sub_field('flex_hero_bottom_play');
    }   

else if ($buttonType == 'center_link'){
    $centerLinkButton = get_sub_field('flex_hero_center_link');
    }   

else if ($buttonType == 'bottom_link'){
    $bottomLinkButton = get_sub_field('flex_hero_bottom_link');
    }   


?>