<?php
/*
Plugin Name: OpenID Delegate
Plugin URI: http://apps.alexisabarca.com/oiddelegate_plugin
Description: Permite usar tu blog como direccion Open ID usando el proceso de delegacion de otro proveedor Open ID
Version: 1.0
Author: Alexis Abarca
Author URI: http://www.alexisabarca.com
License: GPL2
*/

/*  Copyright 2011  Alexis Abarca  (email : admin@alexisabarca.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Fill these constants with your OpenID server
define('OID_DELEGATE_SVR','https://www.startssl.com/id.ssl');
define('OID_DELEGATE_DEL','https://alexisabarca.startssl.com/');

// Main plugin function, print delegation tags in page
function oid_delegate_init(){
	printf('<link rel="openid.server" href="%s" />'."\n",OID_DELEGATE_SVR);
	printf('<link rel="openid.delegate" href="%s" />'."\n",OID_DELEGATE_DEL);
}

// Add hook
add_action('wp_head','oid_delegate_init');