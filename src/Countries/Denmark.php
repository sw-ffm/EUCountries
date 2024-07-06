<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Denmark extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'dk';

        $this->nameGerman = 'Dänemark';

        $this->nameLocal = 'Danmark';

        $this->nameEnglish = 'Denmark';

        $this->capitalCity = 'Kopenhagen';

        $this->centerLat = '56.2264469';

        $this->centerLon = '9.2075211';

        $this->vatRate = '25';

        $this->currency = 'DKK';

        $this->currencySymbol = 'kr';

        $this->rateToEuro = '7.46';
    }
    
}