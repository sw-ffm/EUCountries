<?php

namespace swffm\EUCountries\Calc;

use swffm\EUCountries\Calc\CalculatorInterface;
use swffm\EUCountries\Models\EUCountryInterface;


class GrossFromNet extends CalculatorInterface
{

    function __construct( EUCountryInterface $country ){

        $this->country = $country;

    }

    public function calc( $net=1 ) : object{

        bcscale( 10 );
        $this->net = (string)$net;
        $tmp = bcdiv( $this->net, '100' );
        $this->gross = bcmul( (string)$tmp, (string)( 100 + $this->country->vatRate ) );
        $this->vat = bcsub( (string)$this->gross, (string)$this->net );
        $this->result = bcadd( $this->net, $this->vat );
        return $this;

    }

}