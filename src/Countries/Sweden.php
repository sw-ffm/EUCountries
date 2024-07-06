<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Sweden extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'se';

        $this->nameGerman = 'Schweden';

        $this->nameLocal = 'Sverige';

        $this->nameEnglish = 'Sweden';

        $this->capitalCity = 'Stockholm';

        $this->centerLat = '63.8825749';

        $this->centerLon = '16.5029371';

        $this->vatRate = '25';

        $this->currency = 'SEK';

        $this->currencySymbol = 'kr';

        $this->rateToEuro = '11.77';
    }
    
}