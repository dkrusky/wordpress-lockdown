<?php
if(!defined('LOCK_IT_DOWN')) { return; }

// remove creation of multiple sizes of images to save storage space
remove_image_size('large');
remove_image_size('medium');
remove_image_size('thumbnail');
