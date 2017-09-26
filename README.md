# WordPress Lockdown

This is a full installation of WordPress with the following changes :

* All the "twentyxxxxxxx" themes are removed
* Default plugins "akismet" and "hello dolly" are removed
* The `wp-content` folder is renamed to `assets`
* Language support is enabled and set to `en_CA` by default. Lang files are stored in `lang`
* `uploads` folder is renamed to `media`.

Several methods were used to make it easier to secure your wordpress installation as follows :

## Updated `wp-config-sample.php`

You should copy `wp-config-sample.php` to `wp-config.php` making any adjustments for your site. (database credentials, etc), prior to running the WordPress installation script as you normally would.

## htaccess is pre-configured

While the .htaccess file is pre-configiured, you will still need to make some minor adjustments such as:

* Change `example.com` and `example\.com` to your domain.
* Update `123\.123\.123\.123` to the IP address you wish to allow access to the `wp-admin/` folder

## After installation
Edit the `lockitdown.sh` script, and change the last line so the path is the same as your uploads path (if you changed it from `assets/media`).

You will then want to run the `lockitdown.sh` script from your wordpress root (included), and delete it after. This will set the access modifiers on all files to `404` (read, none, read), and on all folders to `515` (read+exec, exec, read+exec). It will also ensure the directory assigned for uploading is writable.
After this, it will delete the WordPress install script, license.txt, and readme.html files.  You should delete the `lockitdown.sh` script after running it.


## Notes

There is now a `.htaccess` file inside `assets/media` which disables all exec file handlers (scripts will not run from this folder), so even if an attacker uploads a file here, it will not execute.

There is a plugin we wrote called "lock-it-down" and is the ONLY plugin in this installation. Enabling this plugin will do the following:

* Prevent WordPress from overwriting your `.htaccess` file
* Disable the author archives page.
* Disable user registration.
* Turns off the multiple sizes for image uploads. Only the original will be used.
* Disable theme and plugin automatic updates.

After completing your installation, you should ensure that the credentials used for the database settings, are limited to only what you need.
