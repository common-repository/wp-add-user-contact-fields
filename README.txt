=== WP Add User Contact Fields ===
Contributors: fcojgodoy
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C7M43R6RDXRBG
Tags: user contact methods, user contact fields
Requires at least: 3.0.1
Tested up to: 4.9.7
Stable tag: trunk
Requires PHP: 5.4
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl.html

Add user contact methods/fields that themes can use.


== Description ==

IMPORTANT: This plugin if prepare for developers of WordPress themes.

Add user contact methods/fields that themes can use. This plugin shows nothing in the front of the web. It is the code of the theme that must use the plugin to display the information.
Usually, this plugin must be installed only if the theme requires it.

Examples of use within the theme code:
`<?php esc_html_e( get_the_author_meta( 'city' ) ) ?>`
`<a title="<?php esc_attr_e( 'Facebook', 'text_domain' ) ?>" href="https://facebook.com/<?php esc_html_e( get_the_author_meta( 'facebook' ) ) ?>" target="blank"></a>`


== Features ==

This plugin adds the following user contact fields:
- Address
- City
- Country
- Tel
- Fax
- Facebook Username
- Twitter Username
- Google Plus ID
- Skye Username


= Contributing =

- Active development of this plugin is handled on [GitLab](https://gitlab.com/fcojgodoy/wp-add-user-contact-fields)


= Donation =

If you enjoy using this plugin and find it useful, please consider making a donation:
[![Buy Me A Coffee](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/M5pKgBlWk)


== Installation ==

Use the installer via back-end of your install or:
1. Unpack the download-package.
2. Upload the files to the /wp-content/plugins/ directory.
3. Activate the plugin through the Plugins menu in WordPress and click Activate.
4. Administrators can set the plugin options and configuration in 'Settings/Comments' menu in WordPress dashboard.


== Changelog ==

= 0.0.1 =
* First version.
