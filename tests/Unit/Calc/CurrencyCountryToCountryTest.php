<?php 

use swffm\EUCountries\EUCountryFactory;
use swffm\EUCountries\Calc\CurrencyCountryToCountry;
use PHPUnit\Framework\TestCase;

class CurrencyCountryToCountryTest extends TestCase 
{

    public function testCalc() : void{

        $country1 = EUCountryFactory::generate( 'de' );
        $country2 = EUCountryFactory::generate( 'hu' );
        $calculator = new CurrencyCountryToCountry( $country1, $country2 );
        $result = $calculator->calc( '1' )->getResult();
        $this->assertSame('392.4400000000', $result);

    }

}