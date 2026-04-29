<?php

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/cpt.php';

// Only load ACF if installed
if (function_exists('acf_add_local_field_group')) {
    require_once get_template_directory() . '/inc/acf-fields.php';
}