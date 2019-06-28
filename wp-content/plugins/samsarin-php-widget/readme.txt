=== Samsarin PHP Widget ===
Contributors: samsarin
Tags: php, widget
Requires at least: 2.1
Tested up to: 2.8
Stable tag: 1.3.2

A plugin that adds that ability to insert any PHP code into a sidebar widget.

== Description ==

The text widget that comes with the wordpress does not allow you to include PHP code. This plugin adds a new widget called `Samsarin PHP Widget`, which will allow you to include PHP code, as well as plain text and HTML.

The current version supports Wordpress 2.8+. To get support for Wordpress 2.1 - 2.7, use version 1.3.2 of the widget.

Features included:

* Add PHP code to both the widget title and the widget body.

_Warning: This widget provides great flexibility in customizing your sidebar. It achieves this by automatically evaluating any included PHP included in the title or the body of the widget. Care should be taken when including PHP code in the sidebar, as with anywhere else in the Wordpress system._

== Installation ==

1. Download the Samsarin PHP Widget and unzip it.
2. Copy `samsarin-php-widget.php` to the `/wp-content/plugins` directory.
3. Login to your admin console, go to `Plugins`, and enable the `Samsarin PHP Widget`.

== Uage ==

1. Login to your admin console.
2. Go to Design | Widgets.
3. Scroll towards the bottom of the page and look for the `Samsarin PHP Widgets` section. Here you can select the number of widgets you'd like for your website (default is 1).
4. Click the `Add` link on the Samsarin PHP widget to add it to your sidebar.
5. Click `Edit` to set the text for the title and the body.

You may enter PHP code both in the title and the body.

== Frequently Asked Questions ==

= What versions of Wordpress are supported? =

The current version is supported with Wordpress 2.8+.

Version 1.3.2 of the plugin is supported with Wordpress 2.1 - 2.7 and has been tested with Wordpress 2.1, 2.2, 2.3, and 2.5.1.

= What do I do if Samsarin PHP Widget does not show up in the widget admin console? =

First, make sure that the plugin is enabled.

1. Log in to the admin console
2. Go to Plugins
3. Verify that "Samsarin PHP Widget" is in the list. If it is not, then wordpress doesn't see the plugin. Is it in your plugin directory (wp-content/plugins)?
4. Verify that the plugin is enabled
