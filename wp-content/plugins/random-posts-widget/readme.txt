=== Random Posts Widget ===
Contributors: adywarna
Donate link: http://www.romantika.name/v2/
Tags: random, posts, random posts, widget
Requires at least: 2.1
Tested up to: 3.5.1
Stable tag: 2.1

This simple plugin is a widget that displays a list of random posts on your widgetized sidebar.

It supports multiple instances with WordPress 2.8 and above.

== Description ==

This simple plugin is a widget that displays a list of random posts on your widgetized sidebar.

It supports multiple instances with WordPress 2.8 and above.

== Installation ==

1. Upload `randomposts.php` to the `/wp-content/plugins/random-posts-widget` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use your 'Presentation'/'Sidebar Widgets' settings to drag and configure

Or use the automatic update feature

== Configuration ==

* Widget title: the title of the widget
* List types: ul for bulleted list, p for paragraph, br for paragraph with line breaks
* Post count: Number of random posts you would like to be displayed
* Category: Only this category will be selected as the source

== Change Log ==

* 07-May-2007: Fixed a bug of displaying widget before and after tag
* 14-Jun-2007: Fixed a bug where pages are also selected. Now it only displays posts.
* 26-Jun-2007: Removed before and after configuration options, now taken from theme settings
* 03-Aug-2007: Overhauled entire engine to optimize queries. This has been tested on a test blog with 50,000 posts on an old machine (Pentium III 600MHz) in maximum 3 seconds. Also removed duplicated results and added category to choose.
* 04-Aug-2007: Fixed a bug where wrong permalink was displayed
* 10-Aug-2007: Fixed a bug where if 1 post count is selected an error occured
* 27-Sep-2007: Added ability to detect database version (WordPress 2.3 has database changed) while maintaining backward-compatibility with 2.2.x
* 30-May-2013: Use WP_Widget to allow multiple instances since WordPress 2.8, while maintaining backwards-compatibility
