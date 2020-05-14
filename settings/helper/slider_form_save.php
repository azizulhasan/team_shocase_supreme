<?php

$slider = sanitize_text_field($_POST['slider_activation']);
$slider .= "|";
$slider .= "|" . sanitize_text_field($_POST['effect_duration']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_active']);
$slider .= "|" . sanitize_text_field($_POST['icon_style']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_icon_size']);
/* 0 - 5 */

$slider .= "|" . sanitize_text_field($_POST['prev_next_icon_border_radius']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_bgcolor']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_color']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_hover_bgcolor']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_hover_color']);
/* 6 - 10 */

$slider .= "|" . sanitize_text_field($_POST['indicator_activation']);
$slider .= "|" . sanitize_text_field($_POST['indicator_width']);
$slider .= "|" . sanitize_text_field($_POST['indicator_height']);
$slider .= "|" . sanitize_text_field($_POST['indicator_active_color']);
$slider .= "|" . sanitize_text_field($_POST['indicator_color']);
/* 11 - 15 */

$slider .= "|" . sanitize_text_field($_POST['indicator_border_radius']);
$slider .= "|" . sanitize_text_field($_POST['indicator_margin']);
/* 16 - 17 */

/* Read More start  */
$slider .= "|" . sanitize_text_field($_POST['readmore_activation']);
$slider .= "|" . sanitize_text_field($_POST['readmore_text']);
$slider .= "|" . sanitize_text_field($_POST['readmore_height']);
/* 18 - 20 */

$slider .= "|" . sanitize_text_field($_POST['readmore_width']);
$slider .= "|" . sanitize_text_field($_POST['readmore_font_size']);
$slider .= "|" . sanitize_text_field($_POST['readmore_font_color']);
$slider .= "|" . sanitize_text_field($_POST['readmore_font_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['readmore_border_width']);
/* 21 - 25 */


$slider .= "|" . sanitize_text_field($_POST['readmore_border_color']);
$slider .= "|" . sanitize_text_field($_POST['readmore_border_radius']);
$slider .= "|" . sanitize_text_field($_POST['readmore_backbround_color']);
$slider .= "|" . sanitize_text_field($_POST['readmore_backbround_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['readmore_font_weight']);
/* 26 - 30 */


$slider .= "|" . sanitize_text_field($_POST['readmore_text_transform']);
$slider .= "|" . sanitize_text_field($_POST['readmore_text_align']);
$slider .= "|" . sanitize_text_field($_POST['readmore_font_family']);
$slider .= "|" . sanitize_text_field($_POST['readmore_margin_top']);
$slider .= "|" . sanitize_text_field($_POST['readmore_margin_bottom']);
/* 31 - 35 */


$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 36 - 40 */

/* Member Start */
$slider .= "|" . sanitize_text_field($_POST['member_text_align']);
$slider .= "|" . sanitize_text_field($_POST['member_margin_top']);
$slider .= "|" . sanitize_text_field($_POST['member_margin_bottom']);
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 41 - 50 */

/* Designation Start */
$slider .= "|" . sanitize_text_field($_POST['designation_text_align']);
$slider .= "|" . sanitize_text_field($_POST['designation_margin_top']);
$slider .= "|" . sanitize_text_field($_POST['designation_margin_bottom']);
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 51 - 60 */

/* Category Start */
$slider .= "|" . sanitize_text_field($_POST['category_activation']);
$slider .= "|" . sanitize_text_field($_POST['category_font_size']);
$slider .= "|" . sanitize_text_field($_POST['category_font_color']);
$slider .= "|" . sanitize_text_field($_POST['category_font_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['category_border_width']);
/* 61 - 65 */

$slider .= "|" . sanitize_text_field($_POST['category_border_color']);
$slider .= "|" . sanitize_text_field($_POST['category_background_color']);
$slider .= "|" . sanitize_text_field($_POST['category_active_background_color']);
$slider .= "|" . sanitize_text_field($_POST['category_active_font_color']);
$slider .= "|" . sanitize_text_field($_POST['category_active_border_color']);
/* 66 - 70 */

$slider .= "|" . sanitize_text_field($_POST['category_font_weight']);
$slider .= "|" . sanitize_text_field($_POST['category_font_family']);
$slider .= "|" . sanitize_text_field($_POST['category_margin_bottom']);
$slider .= "|" . sanitize_text_field($_POST['category_menu_height']);
$slider .= "|" . sanitize_text_field($_POST['category_margin_right']);
/* 70 - 75 */

$slider .= "|" . sanitize_text_field($_POST['category_padding_right_left']);
$slider .= "|" . sanitize_text_field($_POST['category_position']);
$slider .= "|" . sanitize_text_field($_POST['category_border_raidus']);
$slider .= "|";
$slider .= "|";
/* 76 - 80 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";



$memberorder = $_POST['custom_css'];

$wpdb->query($wpdb->prepare("UPDATE $style_table SET css = %s, slider = %s, memberorder=%s WHERE id = %d", $css, $slider, $memberorder, $styleId));
