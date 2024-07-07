<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Slovenia extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'si';

        $this->nameGerman = 'Slowenien';

        $this->nameLocal = 'Slovenija';

        $this->nameEnglish = 'Slovenia';

        $this->capitalCity = 'Ljubljana';

        $this->centerLat = '46.061487';

        $this->centerLon = '14.6812181';

        $this->vatRate = '22';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}