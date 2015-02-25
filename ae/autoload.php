<?php
/*
Plugin Name: ET Mailing
Plugin URI: https://www.enginethemes.com/extensions/
Description: This plugin allows you to use Third-party service to send email, avoid spam filters.
Version: 1.0.0
Author: EngineTheme
Developer : Duoc Nguyen Van
Author URI: http://enginethemes.com
*/
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2/24/2015
 * Time: 11:56 AM
 */

require_once dirname( __FILE__ )."/Psr4ClassLoader.php";
require_once dirname( __FILE__ )."/src/functions.php";

$loader = new Psr4ClassLoader();

$loader->addPrefix('AE', __DIR__.'/src');
$loader->addPrefix('AE\\Field', __DIR__.'/src/Field');

$loader->register();

global $et_appengine;
if($et_appengine === null) {
    $et_appengine = new AE\AppEngine();
}