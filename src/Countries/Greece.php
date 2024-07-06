<?php

namespace swffm\EUCountries\Countries;

use swffm\EUCountries\EUCountries;


class Greece extends EUCountries 
{

    function __construct()
    {
        $this->iso = 'gr';

        $this->nameGerman = 'Griechenland';

        $this->nameLocal = 'Ελλάδα';

        $this->nameEnglish = 'Greece';

        $this->capitalCity = 'Athen';

        $this->centerLat = '40.0693869';

        $this->centerLon = '22.4381951';

        $this->vatRate = '23';

        $this->currency = 'EUR';

        $this->currencySymbol = '€';

        $this->rateToEuro = '1';
    }
    
}