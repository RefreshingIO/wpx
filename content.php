<?php
/**
 * Content functions.
 *
 * @package           WPX
 *
 * @since             1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'wpx_remove_content_auto_line_breaks' ) ) {

    /**
     * Remove the automatic line breaks from content and excerpts.
     *
     * These must be executed directly in an include file. 
     * Whether it is in functions.php or in another include file, these cannot be wrapped in a hook. 
     * They won't work on init or any other I have found so far.
     *
     *T hey can also be included directly in a template like page.php to execute only for that template.
     *
     * NOTE: 
     * DO NOT INCLUDE THIS IN A DISTRIBUTED THEME OR PLUGIN 
     * (unless it is disabled by default, like not including the include file it's in unless the user specifies).
     *
     * This is bad practice to include in a site you don't control because it can and will break the output of any other themes or plugins.
     *
     * @since 1.0.0
     */
    function wpx_remove_content_auto_line_breaks() {
        // Remove the auto-paragraph and auto-line-break from the content
        remove_filter( 'the_content', 'wpautop' );

        // Remove the auto-paragraph and auto-line-break from the excerpt
        remove_filter( 'the_excerpt', 'wpautop' );
    }

} // wpx_remove_content_auto_line_breaks