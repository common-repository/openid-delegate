=== Open ID Delegate ===
Contributors: alexisabarca
Tags: openid
Requires at least: 2.0.2
Tested up to: 3.1.2
Stable tag: 1.0

This plugin adds the necessary tags to be able to use your blog URL as OpenID address using another OpenID provider

== Description ==

With this very simple plugin you can use the blog URL to authenticate with OpenID using an another OpenID provider.
called Delegation.

In order to maximize performance the vars are contained in plugin file rather than storing in a database.

Due to security issue (http://wordpress.org/news/2011/06/passwords-reset/) php file is gpg signed, ID 7ED1BC0C.

== Installation ==

1) Upload the plugin folder to /wp-content/plugins/

2) Open oid_delegate.php and fill OID_DELEGATE_SVR and OID_DELEGATE_DEL constants with your OpenID server

3) In Wordpress Admin Panel go to Plugins and activate this plugin

== Changelog ==

= 1.0 =
* First version of plugin

== Screenshots ==

screenshot.jpg
