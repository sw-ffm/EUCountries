<?php

namespace swffm\EUCountries\Calc;

use swffm\EUCountries\Calc\Calculator;
use swffm\EUCountries\EUCountries;


class CountryToCountry extends Calculator
{

    protected $country1;

    protected $country2;


    function __construct( EUCountries $country1, EUCountries $country2 ){

        $this->country1 = $country1;

        $this->country2 = $country2;

    }

    public function calc( $arg=1 ) : object{

        bcscale( 10 );
        $tmp = bcdiv( $arg, (string)$this->country1->rateToEuro );
        $this->result = bcmul( $tmp, (string)$this->country2->rateToEuro );
        return $this;

    }

}