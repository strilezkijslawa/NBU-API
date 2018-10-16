<?php
/**
 * Project: nbuAPI
 * Created by: spaceweb.com.ua
 * Date: 10/8/2018
 * Time: 11:11 PM
 */

class JSON_NBU_API extends NBU_API
{
    /**
     * Curl get request
     * @param array $data
     * @param bool $parse = true
     * @return string json || array of objects
     */
    public function getNbuData( $data = array(), $parse = true )
    {
        if ( empty( $data ) ) { return NULL; }

        $curl_array = array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $data['url'] . '&json'
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_array);

        $output = curl_exec($curl);
        curl_close($curl);

        return $parse ? $this->_parseJson( $output ) : $output;
    }

    /**
     * @param $json
     * @return mixed
     */
    private function _parseJson( $json )
    {
        return json_decode( $this->_fixJSON( $json ) );
    }

    /**
     * @param $json
     * @return string
     */
    private function _fixJSON($json) {
        return str_replace( array( ' "', '" ', '""' ), array( ' \"', '\" ', '\""' ), $json );
    }
}