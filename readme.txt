=== Unitizr ===
Contributors:      tradesouthwestgmailcom
Donate link:       https://paypal.me/tradesouthwest
Tags:              woocommerce, number, count, store, resale, ecommerce, rental, product, addition, cart, fee, fees,
Requires at least: 4.2
Tested up to:      5.8
Requies:           Woocommerce 3.0+
Stable tag:        trunk
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-3.0.html
Plugin URI:        http://themes.tradesouthwest.com/plugins/

Woocommerce add-to-cart addon adds duration or increments to products. Opens in Settings > Unitizr

== Description ==

Woocommerce add-to-cart addon adds duration or increments to products and calculates the amount which is added onto said product.

Adds duration fee by number of days or any other incremental value to cart, checkout, product, admin and email invoice. Adds Additional Fee price to the cart based on any increment or duration you choose. Increment can be a price per day, a service fee, a rental time in hours or days, a length of material, a length of athletic run, a time allocation of any sorts, number of buttons attached to each dress, just about anything you can think of can be applied to each and every product. Just leave the amount blank in the product data fields and calculations will be ignored.

This plugin is pretty much just the opposite of a Discount or Price Reduction plugin: it will add and multiply the increment to the product depending on how many increments are selected. You can order a Green Widget with 7 days rental and at $10 a day you will be paying $70 dollars on top of the product cost. This additional fee will show in the cart totals and in each cart item product field just next to the product price. [](http://coderisk.com/wp/plugin/unitizr/RIPS-xBEUAq1yJ7)

== Features ==

* Set value of increment in every product separately
* Auto sense your currency symbol
* Custom name your custom item's duration 
* Can be use for number of days, hours, any given duration
* Option to turn off requirement of adding duration to cart
* No strings attached simplicity setup and configure
* Adds data to admin order panel
* Sends additional text with email invoices
* Allow for tax rate separate from the product tax rate
* Help and Instructions built into admin page
* Alter text in cart, checkout, email and admin to accomodate
* Set tax rate for entry separate from product tax rate
* Adjust positions of text on cart and product page
* Full instructions in admin panel

Demo link: [Demo for Unitizr](https://unitizr.com)

== Installation ==

This section describes how to install the plugin and get it working.
1. Upload `unitizr` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

Q.: Can I change the background colors of individual boxes?
A.: There is a chart in your admin page with the names of all the selectors. If you know CSS then you can use any CSS editor to add
your background colors to.

== Screenshots ==

1. Front side added form fields
2. Administrator view of options
3. Cart view of product with added pricing
4. Checkout page
5. Additional support documents in admin

== Upgrade Notice ==
* Must deactivate Unitizr if installing Unitizr-Plus

== Changelog ==

= 1.0.44 =
* Tested on WP 5.8 and PHP 7.2
* Tested on WC 5.5.2
* clean code in plugin page
* added description notes

= 1.0.43 =
* Fixed submenu arry

= 1.0.42 =
* fixed check for woo on activation
* added readme and main file tags
* fixed link in readme

= 1.0.41 =
* deprecated unistall to avoid losing labels on upgrade
* corrected version render in admin

= 1.0.4 =
* refactored svn with stable in trunk
* rename unitizr_begin_date to unitizr_begin_label
* setup upgrade util

= 1.0.31 =
* refactored uninstall to accept unitizr-plus options
* added git updater prep

= 1.0.3 =
* Aug 2019
* updated meta key query
* changed meta key name

= 1.0.2 =
* Sept 2019
* removed globals from quantity fields
* created function to check if values exists

= 1.0.1 =
* Sept 2019
* added screenshots

= 1.0.0 =
* Sept 2019
* initial release
