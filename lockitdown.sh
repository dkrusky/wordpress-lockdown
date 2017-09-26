#!/bin/bash
find . -type f -exec chmod 404 {} \;
find . -type d -exec chmod 515 {} \;
find ./assets/media -type d -exec chmod 755 {} \;
rm license.txt
rm readme.html
rm wp-admin/install.php
