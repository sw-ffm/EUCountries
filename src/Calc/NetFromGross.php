<?php

namespace swffm\EUCountries\Calc;

use swffm\EUCountries\Calc\Calculator;
use swffm\EUCountries\EUCountries;


class NetFromGross extends Calculator
{

    function __construct( EUCountries $country ){

        $this->country = $country;

    }

    public function calc( $gross=1 ) : object{

        bcscale( 10 );
        $this->gross = (string)$gross;
        $tmp = bcdiv( $this->gross, (string)( 100 + $this->country->vatRate ) );
        $this->net = bcmul( (string)$tmp, 100 );
        $this->vat = bcsub( $this->gross, (string)$this->net );
        $this->result = bcsub( $this->gross, $this->vat );
        return $this;

    }

}