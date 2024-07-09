<?php 

require_once __DIR__ . '/../vendor/autoload.php';

#List the EU countries and show each country object
use swffm\EUCountries\EUCountriesIterator;
use swffm\EUCountries\EUCountryFactory;

$countryIterator = new EUCountriesIterator();
foreach( $countryIterator as $country  ){
    print ((int)$countryIterator->key() + 1) . ". " . $country->iso . " | " . $country->nameEnglish . "<br>";
    $country = EUCountryFactory::generate( $country->iso );
    print json_encode( $country );
    print "\n\n<br><br>";
}


# Exception testing
// EUCountryFactory::generate('us');
// print "\n\n<br><br>";

# CALCULATIONS
# Gross from net 
use swffm\EUCountries\Calc\GrossFromNet;

$calculator = new GrossFromNet( $country );
$result = $calculator->calc( '1' )->getResult();
print $result;
print "\n<br>";
print 'VAT:' . $calculator->getVat();
print "\n<br>";
print 'NET:' . $calculator->getNet();
print "\n<br>";
print 'GROSS:' . $calculator->getGross();
print "\n\n<br><br>";


# Net from gross 
use swffm\EUCountries\Calc\NetFromGross;

$calculator = new NetFromGross( $country );
$result = $calculator->calc( $result )->getResult();
print $result;
print "\n<br>";
print 'VAT:' . $calculator->getVat();
print "\n<br>";
print 'NET:' . $calculator->getNet();
print "\n<br>";
print 'GROSS:' . $calculator->getGross();
print "\n\n<br><br>";


#Calculation of the monetary value from country to country
use swffm\EUCountries\Calc\CurrencyCountryToCountry;

$country1 = EUCountryFactory::generate( 'de' );
$country2 = EUCountryFactory::generate( 'dk' );
$calculator = new CurrencyCountryToCountry( $country1, $country2 );
$result = $calculator->calc( '1' )->getResult();
print $result . ' ' . $country2->currencySymbol;
print "\n\n<br><br>";


#Calculation of the distance between two countries from center lat/lon to center lat/lon
use swffm\EUCountries\Calc\DistanceCountryToCountry;

$calculator = new DistanceCountryToCountry( $country1, $country2 );
print $calculator->getResult() . ' km';
print "\n\n<br><br>";

