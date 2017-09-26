<?php
if(!defined('LOCK_IT_DOWN')) { return; }

// disable author archives
function lockitdown_disable_author_archives() {
        if (is_author()) {
                global $wp_query;
                $wp_query->set_404();
                status_header(404);
        } else {
                redirect_canonical();
        }

}
remove_filter('template_redirect', 'redirect_canonical');
add_action('template_redirect', 'lockitdown_disable_author_archives');
