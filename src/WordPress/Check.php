<?php

/**
 * Created by PhpStorm.
 * User: lenonleite
 * Date: 02/08/17
 * Time: 12:49
 */

namespace Lenonleite\Hacking;

class Check {

	/**
	 * @param string $url
	 * @param string $html
	 * @return bool
	 */
	public function is_wordpress( $url = '', $html = '' ) {

		if ( empty( $url ) && empty( $html ) ) {

			return false;

		}

		$check_html = $this->check_in_html( $html );
		$check_url  = $this->check_in_url( $url );

		if ( $check_html || $check_url ) {

			return true;

		}

		return false;

	}

	/**
	 * @param string $html
	 * @return bool
	 */
	private function check_in_html( $html = '' ) {

		$validXmlrpc = preg_match( "/(.+?)(wp-content\/themes|wp-content\/plugins|wp-includes\/).*/", $html, $matches );
		var_dump( $validXmlrpc );

		return true;
	}

	/**
	 * @param string $url
	 * @return bool
	 */
	private function check_in_url( $url = '' ) {

		$validXmlrpc = preg_match( "/(.+?)((wp-content\/themes|wp-content\/plugins|wp-content\/uploads)|xmlrpc.php|feed\/|comments\/feed\/|wp-login.php|wp-admin).*/", $url, $m );

		var_dump( $validXmlrpc );
		//		if ( $validXmlrpc ) {
//
//		}
		return true;
	}

}