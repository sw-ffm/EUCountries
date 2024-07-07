<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Hungary extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'hu';

        $this->nameGerman = 'Ungarn';

        $this->nameLocal = 'Magyarország';

        $this->nameEnglish = 'Hungary';

        $this->capitalCity = 'Budapest';

        $this->centerLat = '47.078823';

        $this->centerLon = '19.4306351';

        $this->vatRate = '27';

        $this->currency = 'HUF';

        $this->currencySymbol = 'Ft';

        $this->rateToEuro = '392.44';
    }
    
}