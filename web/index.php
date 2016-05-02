<?php

/**
 * ItePHP: Framework PHP (http://itephp.com)
 * Copyright (c) NewClass (http://newclass.pl)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the file LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) NewClass (http://newclass.pl)
 * @link          http://itephp.com ItePHP Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

define('ITE_ROOT', dirname(__DIR__));
define('ITE_WEB', ITE_ROOT.'/web');
define('ITE_SRC', ITE_ROOT.'/src');

require_once ITE_ROOT.'/vendor/autoload.php';


$env='prod';
$debug=false;
if(file_exists(ITE_ROOT.'/dev')){
	$env='dev';
	$debug=true;
}

$root=new \ItePHP\Root($debug,false,$env);
$root->executeRequest();
