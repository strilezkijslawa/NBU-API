<?php
/**
 * Project: nbuAPI
 * Created by: spaceweb.com.ua
 * Date: 10/16/2018
 * Time: 10:57 AM
 */

require_once "NBU_API.php";
require_once "JSON_NBU_API.php";
require_once "XML_NBU_API.php";

$jsonNbuAPI = new JSON_NBU_API();
$xmlNbuAPI = new XML_NBU_API();

require_once 'example.php';

echo '<pre>';
print_r( $xmlNbuAPI->getExchanges( array( 'valcode' => 'USD' ) ) );
echo '</pre>';

echo '<pre>';
print_r( $jsonNbuAPI->getBanks( array( 'typ' => 6 ), false ) );
echo '</pre>';
