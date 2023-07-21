<?php

// Enqueue styles and js
include(get_theme_file_path('/functions/enqueue.php'));


// ACF
require_once get_template_directory() . '/functions/acf.php';

// ACF Blocks
require_once get_template_directory() . '/functions/acf-blocks.php';
