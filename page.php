<?php
    require_once(dirname(__FILE__) . '/../../../wp-config.php');
    $wp->init();
    $wp->parse_request();
    $wp->query_posts();
    $wp->register_globals();
    $wp->send_headers();
    wp_head();
    wp_footer();

    $block_files=['http://plugins.svn.wordpress.org/boxer-block/trunk/editor.css', 'http://plugins.svn.wordpress.org/boxer-block/trunk/style.css', 'http://plugins.svn.wordpress.org/boxer-block/trunk/build/view.js', 'http://plugins.svn.wordpress.org/boxer-block/trunk/build/index.js'];

    echo '<div class="entry-content"><div id="preview" data-script-urls="' . implode( ',', $block_files ) . '">preview</div></div>';
    echo '<script src="/wp-includes/js/dist/block-library.js"></script>';
    echo '<script src="/wp-content/plugins/block-preview-host/dist/index.js"></script>';
    wp_enqueue_script( 'block-library', '/wp-includes/js/dist/block-library.js', array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ), '2.0.1', true );

?>