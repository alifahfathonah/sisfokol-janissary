<?php
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
/////// SISFOKOL_SMK_v5.0_(PernahJaya)                          ///////
/////// (Sistem Informasi Sekolah untuk SMK)                    ///////
///////////////////////////////////////////////////////////////////////
/////// Dibuat oleh :                                           ///////
/////// Agus Muhajir, S.Kom                                     ///////
/////// URL 	:                                               ///////
///////     * http://omahbiasawae.com/                          ///////
///////     * http://sisfokol.wordpress.com/                    ///////
///////     * http://hajirodeon.wordpress.com/                  ///////
///////     * http://yahoogroup.com/groups/sisfokol/            ///////
///////     * http://yahoogroup.com/groups/linuxbiasawae/       ///////
/////// E-Mail	:                                               ///////
///////     * hajirodeon@yahoo.com                              ///////
///////     * hajirodeon@gmail.com                              ///////
/////// HP/SMS/WA : 081-829-88-54                               ///////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////



/**
 * $Id: BaseAuthenticator.php 10 2007-05-27 10:55:12Z spocke $
 *
 * @package BaseAuthenticator
 * @author Moxiecode
 * @copyright Copyright � 2007, Moxiecode Systems AB, All rights reserved.
 */

/**
 * This class handles MCImageManager BaseAuthenticator stuff.
 *
 * @package BaseAuthenticator
 */
class Moxiecode_BaseAuthenticator extends Moxiecode_ManagerPlugin {
	/**#@+
	 * @access public
	 */

	/**
	 * ..
	 */
	function Moxiecode_BaseAuthenticator() {
	}

	/**
	 * ..
	 */
	function onAuthenticate(&$man) {
		return true;
	}
}

// Add plugin to MCManager
$man->registerPlugin("BaseAuthenticator", new Moxiecode_BaseAuthenticator());
?>