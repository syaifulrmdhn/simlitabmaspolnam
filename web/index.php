<?php

/*
 * This file is part of the CRUD Admin Generator project.
 *
 * Author: Jon Segador <jonseg@gmail.com>
 * Web: http://crud-admin-generator.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
// phpinfo(); die;
//var_dump($_POST) ;die;
	
$GLOBALS['$www_root_uri'] = "/simlitabmas/web" ; /** set with  ***/
$cfgProgDir = $_SERVER["DOCUMENT_ROOT"]. "/simlitabmas/web/vendor_01/phpSecurePages/"; 
$cfgUserdir = $_SERVER["DOCUMENT_ROOT"]. "/simlitabmas/web/vendor_01/"; 
$minUserLevel = 100; 	
//$requiredUserLevel = array(1,3,100);
include($cfgProgDir . "secure.php");

require_once __DIR__.'/vendor_01/auth.php';
/*is_authorized($login,$cfgIndexpage,$strLogout,$_SERVER['REQUEST_URI']);
*/

require_once __DIR__.'/controllers/base.php';


?>

