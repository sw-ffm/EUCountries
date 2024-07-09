<?php

namespace swffm\EUCountries\Calc;

use swffm\EUCountries\Calc\CalculatorInterface;
use swffm\EUCountries\Models\EUCountryInterface;


class NetFromGross extends CalculatorInterface
{

    function __construct( EUCountryInterface $country ){

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