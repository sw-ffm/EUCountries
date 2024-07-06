<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Estonia extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'ee';

        $this->nameGerman = 'Estland';

        $this->nameLocal = 'Eesti';

        $this->nameEnglish = 'Estonia';

        $this->capitalCity = 'Tallinn';

        $this->centerLat = '58.796463';

        $this->centerLon = '25.6273801';

        $this->vatRate = '20';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}