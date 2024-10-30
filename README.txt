=== Conditional Taxonomy Option ===
Contributors: yamuaryal 
Tags: acf, taxonomy, conditional taxonomy
Requires at least: 3.0.1
Tested up to: 5.5.3
Stable tag: 5.5.3
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Conditional taxonomy terms option in ACF fields setup.

== Description ==

This plugin will allow users to select the taxonomy terms in the conditional logic to show or hide the custom fields created using the Advanced Custom Field plugin.

== Installation ==

1. Upload `cto-acf.php` to the `/wp-content/plugins/` directory ( Make sure you already hace ACF plugin installed and activated)
2. Activate the plugin through the 'Plugins' menu in WordPress
3. A new option **"Taxonomy is equals to"** and **"Taxonomy is not equal to"** will appear when you select a taxonomy field in dropdown of conditional logic setting.

== Frequently Asked Questions ==

= Do I need to have ACF Pro? =

No, this plugins works with ACF free version as well.

= Does it work with custom taxonomy as well? =

Yes, it supports built-in taxonomy as well as custom taxonomies.

== Screenshots ==

1. Add a new field in field group as taxonomy.
2. Turn on the *Conditional Logic* and select the Taxonomy Field, then you will find two options in dropdown: **"Taxononmy is equal to"** and **"Taxonomy is not equal to"**

== Changelog ==

= 1.0 =
* Innitial Release of plugin


`<?php code(); // goes in backticks ?>`