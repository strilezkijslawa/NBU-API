<?php
/**
 * Project: nbuAPI
 * Created by: spaceweb.com.ua
 * Date: 10/8/2018
 * Time: 11:11 PM
 */

class XML_NBU_API extends NBU_API
{
    /**
     * Curl get request
     * @param array $data
     * @param bool $parse = true
     * @return string xml || SimpleXMLElement
     */
    public function getNbuData( $data = array(), $parse = true )
    {
        if ( empty( $data ) ) { return NULL; }

        $curl_array = array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $data['url']
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_array);

        $output = curl_exec($curl);
        curl_close($curl);

        return $parse ? $this->_parseXml( $output ) : $output;
    }

    /**
     * @param $xml
     * @return SimpleXMLElement
     */
    private function _parseXml( $xml )
    {
        $output = new SimpleXMLElement( $xml );
        return $output;
    }
}