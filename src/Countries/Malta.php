<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Malta extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'mt';

        $this->nameGerman = 'Malta';

        $this->nameLocal = 'Malte';

        $this->nameEnglish = 'Malta';

        $this->capitalCity = 'Valletta';

        $this->centerLat = '35.9483799';

        $this->centerLon = '14.3597351';

        $this->vatRate = '18';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}