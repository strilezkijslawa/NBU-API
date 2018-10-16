# NBU-API
Classes for working with **National Bank of Ukraine API**.
Currently class can get information about banks and current exchange UAH to foreign currencies and banking metals.

<h3>Example</h3>
<pre>
    require_once "NBU_API.php";<br>
    require_once "JSON_NBU_API.php";<br>
    require_once "XML_NBU_API.php";<br>
    <br>
    $jsonNbuAPI = new JSON_NBU_API();<br>
    $xmlNbuAPI = new XML_NBU_API();<br>
    <br>
    print_r( $xmlNbuAPI->getExchanges( array( 'valcode' => 'USD' ) ) );<br>
    <br>
    print_r( $jsonNbuAPI->getBanks( array( 'typ' => 6 ), false ) );<br>
    <br>
</pre>

<h3>Answers</h3>
<pre>
  SimpleXMLElement Object
(
    [currency] => SimpleXMLElement Object
        (
            [r030] => 840
            [txt] => Долар США
            [rate] => 27.928166
            [cc] => USD
            [exchangedate] => 16.10.2018
        )

)
[
{ 
"GLMFO":322313,"N_GOL":"АТ "Укрексімбанк"","NAME_E":null,"KOD_EDRPOU":null,"SHORTNAME":"Представництво АТ "Укрексімбанк" у місті Лондоні, СК","NKB":"002","TYP":"6","KU":"0","N_OBL":"Не визначена","DEPCODE":"00226826626205000000","P_IND":null,"TNP":"м.","NP":"Лондон","ADRESS":"Juxon Нouse 100 St. Paul's Churchyard, London EC4M 8BU, United Kingdom","KODT":null,"TELEFON":null,"KSTAN":"1","N_STAN":"Нормальний","D_STAN":"09.09.2006","D_OPEN":"25.05.2006","D_CLOSE":null,"STAN_GOL":"1","NSTAN_GOL":"Нормальний"
 }
,{ 
"GLMFO":322313,"N_GOL":"АТ "Укрексімбанк"","NAME_E":null,"KOD_EDRPOU":null,"SHORTNAME":"Представництво АТ "Укрексімбланк" у м.Нью-Йорку, США","NKB":"002","TYP":"6","KU":"0","N_OBL":"Не визначена","DEPCODE":"00226840626205000000","P_IND":null,"TNP":"м.","NP":"Нью-Йорк","ADRESS":"14 WALL STREET, 20th FLOOR,NEW YORK, NY 10005,USA","KODT":null,"TELEFON":null,"KSTAN":"1","N_STAN":"Нормальний","D_STAN":null,"D_OPEN":"10.10.2007","D_CLOSE":null,"STAN_GOL":"1","NSTAN_GOL":"Нормальний"
 }
,{ 
"GLMFO":334851,"N_GOL":"ПАТ "ПУМБ"","NAME_E":null,"KOD_EDRPOU":null,"SHORTNAME":"Представництво ПУМБ в м.Лондон","NKB":"115","TYP":"6","KU":"0","N_OBL":"Не визначена","DEPCODE":"11526826626747000001","P_IND":null,"TNP":"м.","NP":"Лондон","ADRESS":"100 Pall Mall, office 19. St.James's,  SW1Y 5HP","KODT":"(44)","TELEFON":"2073213900","KSTAN":"5","N_STAN":"Тимчасово призупинено діяльність","D_STAN":null,"D_OPEN":"15.01.2003","D_CLOSE":null,"STAN_GOL":"1","NSTAN_GOL":"Нормальний"
 }
]
 </pre>
