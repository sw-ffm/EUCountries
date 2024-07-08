<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use swffm\EUCountries\EUCountryFactoryDB;

# Without argument - default Germany
$country = EUCountryFactoryDB::generate();
print json_encode( $country );
# With argument
$country = EUCountryFactoryDB::generate( 'at' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'be' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'bg' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'hr' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'dk' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'ee' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'fi' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'fr' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'gr' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'ie' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'it' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'lv' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'lt' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'lu' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'mt' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'nl' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'pl' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'pt' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'ro' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'se' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'sk' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'si' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'es' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'cz' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'hu' );
print json_encode( $country );
$country = EUCountryFactoryDB::generate( 'cy' );
print json_encode( $country );

# Exception testing
// EUCountryFactoryDB::generate('us');
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

$country1 = EUCountryFactoryDB::generate( 'de' );
$country2 = EUCountryFactoryDB::generate( 'dk' );
$calculator = new CurrencyCountryToCountry( $country1, $country2 );
$result = $calculator->calc( '1' )->getResult();
print $result . ' ' . $country2->currencySymbol;
print "\n\n<br><br>";


#Calculation of the distance between two countries from center lat/lon to center lat/lon
use swffm\EUCountries\Calc\DistanceCountryToCountry;

$calculator = new DistanceCountryToCountry( $country1, $country2 );
print $calculator->getResult() . ' km';
print "\n\n<br><br>";