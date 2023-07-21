<?php
// echo '<pre>';
// print_r($block);
// echo '</pre>';

// Create class attribute allowing for custom "className"
$class_name = 'rt-youtube-wrapper alignfull';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}

// Add any ACF generated classes
$margin_top = get_field('remove_margin_top');
if ($margin_top) {
  $class_name .= ' margin-block-start-0';
}

// Support block "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Look for wp block styles and add them inline
$style = '';

// Check for padding
if (!empty($block['style']['spacing']['padding']['top'])) {
  $wp_var = $block['style']['spacing']['padding']['top'];
  $pt = 'padding-top: var(--wp--preset--spacing--' . substr($wp_var, -2) . ');';
  $style .=  $wp_var;
}

if (!empty($block['style']['spacing']['padding']['bottom'])) {
  $wp_var = $block['style']['spacing']['padding']['bottom'];
  $wp_var = 'padding-bottom: var(--wp--preset--spacing--' . substr($wp_var, -2) . ');';
  $style .=  $wp_var;
}

// Check for margin
if (!empty($block['style']['spacing']['margin']['top'])) {
  $wp_var = $block['style']['spacing']['margin']['top'];
  $wp_var = 'margin-top: var(--wp--preset--spacing--' . substr($wp_var, -2) . ');';
  $style .=  $wp_var;
}

if (!empty($block['style']['spacing']['margin']['bottom'])) {
  $wp_var = $block['style']['spacing']['margin']['bottom'];
  $wp_var = 'margin-bottom: var(--wp--preset--spacing--' . substr($wp_var, -2) . ');';
  $style .=  $wp_var;
}


// Check for background-color
if (!empty($block['backgroundColor'])) {
  $background_color = $block['backgroundColor'];
  $style .= 'background-color: var(--wp--preset--color--' . $block['backgroundColor']  . ');';
}
?>


<div <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" style="<?php echo esc_attr($style) ?>">


</div>