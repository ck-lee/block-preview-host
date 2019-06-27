<?php
    require_once(dirname(__FILE__) . '/../../../wp-config.php');
    $wp->init();
    $wp->parse_request();
    $wp->query_posts();
    $wp->register_globals();
    $wp->send_headers();
    wp_head();
    wp_footer();

    echo site_url();
    wp_enqueue_script( 'block-library', '/wp-includes/js/dist/block-library.js', array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ), '2.0.1', true );
    

?>