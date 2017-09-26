<?php
if(!defined('LOCK_IT_DOWN')) { return; }

// disable automatic plugin updates
add_filter('auto_update_plugin',		'__return_false');

// disable automatic theme updates
add_filter('auto_update_theme',			'__return_false');
