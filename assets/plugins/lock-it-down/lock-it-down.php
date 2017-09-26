<?php
/*
Plugin Name: Lock It Down
Plugin URI: http://www.onezeroless.com/
Description: Assistant to help lock down WordPress by disabling some of wordpress's methods.
Author: One Zero Less
Version: 1.0
Author URI: http://www.onezeroless.com/
*/

define('LOCK_IT_DOWN', true);

include('disable-updates.php');
include('disable-htaccess-writes.php');
include('disable-registration.php');
include('disable-author-archives.php');
include('disable-image-multisize.php');
