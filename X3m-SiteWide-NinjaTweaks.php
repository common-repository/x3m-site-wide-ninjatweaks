<?php
/*
Plugin Name: X3M Site-Wide Ninja Tweaks
Description: This will add site-wide tweaks to the FUNCTIONS.PHP of any wp-theme, and increase the security of your WordPress Site. The creation of ths plugin was based on Webfactory's Ninja Security Plugin!
Version: 1.0 bld.20130509a
*/

/*
The code of this plugin was inspired after reading the following article:
Site-Specific Plugins: A Better Alternative to the WordPress functions.php File
at www.bravenewcode.com/2012/04/site-specific-plugins-a-better-alternative-to-the-wordpress-functions-php-file
*/


/* 
The following lines will remove Wordpress 
meta header version info, so hacker's can't find
which version of WP is running!
*/
function remove_version() {
  return '';
}
add_filter('the_generator', 'remove_version');


/* 
The following line will replace the login information
so hackers will not know if username or password was wrong!
*/
function wrong_login() {
  return 'Wrong username or password.';
}
add_filter('login_errors', 'wrong_login');

/*
This disables the EDITING of Themes and Plugins by NON ADMIN users!
*/
define('DISALLOW_FILE_EDIT', true);

/* 
The following lines will remove 
WLW link is present in the header
which is only needed if Winodws Live Writer
needs to be used!
/*
remove_action('wp_head', 'wlwmanifest_link');


/*
Feel free to add more tweaks
Or send email to x3mgroup@live.com 
with suggestions!
*/
?>
