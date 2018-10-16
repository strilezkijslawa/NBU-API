<?php
/**
 * Project: nbuAPI
 * Created by: spaceweb.com.ua
 * Date: 10/8/2018
 * Time: 10:09 PM
 */

class NBU_API
{
    /**
     * Bank type
     * @var array
     */
    protected $bank_types = array(
        0 => 'банк-юридична особа',
        1 => 'філія',
        2 => 'відділення',
        3 => 'представництво на території України',
        4 => 'обмінний пункт',
        5 => 'філія за межами України',
        6 => 'представництво за межами України',
    );

    /**
     * Bank region
     * @var array
     */
    protected $bank_ku = array(
        0 => 'Не визначена',
        1 => 'Вінницька',
        2 => 'Волинська',
        3 => 'Дніпропетровська',
        4 => 'Донецька',
        5 => 'Житомирська',
        6 => 'Закарпатська',
        7 => 'Запорізька',
        8 => 'Івано-Франківська',
        9 => 'Київська',
        10 => 'Кіровоградська',
        11 => 'Автономна Республiка Крим',
        12 => 'Луганська',
        13 => 'Львівська',
        14 => 'Миколаївська',
        15 => 'Одеська',
        16 => 'Полтавська',
        17 => 'Рівненська',
        18 => 'Сумська',
        19 => 'Тернопільська',
        20 => 'Харківська',
        21 => 'Херсонська',
        22 => 'Хмельницька',
        23 => 'Черкаська',
        24 => 'Чернігівська',
        25 => 'Чернівецька',
        26 => 'Київ',
        29 => 'Севастополь'
    );

    /**
     * @param array $params with params: (string) valcode = EUR, date in format YYYYMMDD
     * @param bool $parse = true
     * @return string
     */
    function getExchanges( $params = array(), $parse = true ) {
        $params_str = !empty($params) ? '?' . http_build_query( $params, '', '&amp;' ) : '?';
        $data = array(
            'url' => 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange' . $params_str
        );

        return $this->getNbuData( $data, $parse );
    }

    /**
     * @param array $params with params: (int) type = 0-6, (int) glmfo = 300355
     * @param bool $parse = true
     * @return mixed
     */
    function getBanks( $params = array(), $parse = true ) {
        $params_str = !empty($params) ? '?' . http_build_query( $params, '', '&amp;' ) : '?';
        $data = array(
            'url' => 'https://bank.gov.ua/NBU_BankInfo/get_data_branch' . $params_str
        );

        return $this->getNbuData( $data, $parse );
    }
}