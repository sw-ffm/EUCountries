<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use swffm\EUCountries\EUCountryFactory;

# Without argument - default Germany
$country = EUCountryFactory::generate();
print json_encode( $country );
# With argument
$country = EUCountryFactory::generate( 'at' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'be' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'bg' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'hr' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'dk' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'ee' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'fi' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'fr' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'gr' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'ie' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'it' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'lv' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'lt' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'lu' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'mt' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'nl' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'pl' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'pt' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'ro' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'se' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'sk' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'si' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'es' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'cz' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'hu' );
print json_encode( $country );
$country = EUCountryFactory::generate( 'cy' );
print json_encode( $country );

# Exception testing
// EUCountryFactory::generate('us');
print "\n\n<br><br>";

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

#Listing EU countries
use swffm\EUCountries\EUCountriesIterator;
$countryIterator = new EUCountriesIterator();
foreach( $countryIterator as $country  ){
    print ((int)$countryIterator->key() + 1) . ". " . $country->iso . " | " . $country->nameEnglish . "<br>";
}