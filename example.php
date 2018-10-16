<?php
/**
 * Project: nbuAPI
 * Created by: spaceweb.com.ua
 * Date: 10/16/2018
 * Time: 2:05 PM
 */
?>

<h3>Example</h3>
<code>
    require_once "NBU_API.php";<br>
    require_once "extend/JSON_NBU_API.php";<br>
    require_once "extend/XML_NBU_API.php";<br>
    <br>
    $jsonNbuAPI = new JSON_NBU_API();<br>
    $xmlNbuAPI = new XML_NBU_API();<br>
    <br>
    print_r( $xmlNbuAPI->getExchanges( array( 'valcode' => 'USD' ) ) );<br>
    <br>
    print_r( $jsonNbuAPI->getBanks( array( 'typ' => 6 ), false ) );<br>
    <br>
</code>

<h3>Answers</h3>