<?php 

use swffm\EUCountries\EUCountryFactory;
use swffm\EUCountries\Calc\DistanceCountryToCountry;
use PHPUnit\Framework\TestCase;

class DistanceCountryToCountryTest extends TestCase 
{

    public function testCalc() : void{

        $country1 = EUCountryFactory::generate( 'de' );
        $country2 = EUCountryFactory::generate( 'hu' );
        $calculator = new DistanceCountryToCountry( $country1, $country2 );
        $result = $calculator->getResult();
        $this->assertSame('777.293310363847659', $result);

    }

}