<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Poland extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'pl';

        $this->nameGerman = 'Polen';

        $this->nameLocal = 'Polska';

        $this->nameEnglish = 'Poland';

        $this->capitalCity = 'Warschau';

        $this->centerLat = '52.1675179';

        $this->centerLon = '19.4356921';

        $this->vatRate = '23';

        $this->currency = 'PLN';

        $this->currencySymbol = 'zł';

        $this->rateToEuro = '4.29';
    }
    
}