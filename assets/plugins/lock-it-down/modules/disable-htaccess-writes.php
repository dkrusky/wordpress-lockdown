<?php
if(!defined('LOCK_IT_DOWN')) { return; }

// disable automatic htaccess building
add_filter('flush_rewrite_rules_hard',  '__return_false');
