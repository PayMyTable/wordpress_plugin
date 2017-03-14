=== Plugin Name ===
Contributors: loiclefloch
Tags: PayMyTable, commande, réservation, order, booking
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 4.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The PayMyTable plugin for wordpress allow you to add our booking and order iframe to your wordpress website.

== Description ==

The PayMyTable plugin for wordpress allow you to add our booking and order iframe to your wordpress website.



== Installation ==

e.g.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)


== Frequently Asked Questions ==

= [FR] Comment utiliser le plugin de commande PayMyTable =

Ajoutez le shortcode suivant dans votre page / article.

```
[PayMyTableOrder color="" apiConsumer="" modes="1,2"]
```

- `color` est la couleur hexadecimale à utiliser pour le plugin (ex: #C80633)
- `apiConsumer` est l'api consumer fournit par l'équipe PayMyTable
- `modes`: les modes de commande à afficher sur le plugin. Vous devez séparer les différentes valeurs par une `,`:
  - 1: Take Away
  - 2: Delivery


= [EN] How to use PayMyTable order plugin =

Add the following shortcode in your page / article.

```
[PayMyTableOrder color="" apiConsumer="" modes="1,2"]
```

- The `color` is the hexadecimal color to set on the plugin (ex: #C80633)
- The `apiConsumer` is the api consumer given to you by the PayMyTable team
- The order modes to display on the plugin. You have to put the different modes separate by a `,`
  - 1: Take Away
  - 2: Delivery

== Changelog ==

= 1.0 =
Initial version

* Order plugin
* Booking plugin
