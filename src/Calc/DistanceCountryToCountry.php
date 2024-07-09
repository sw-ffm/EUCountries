<?php

namespace swffm\EUCountries\Calc;

use swffm\EUCountries\Calc\Calculator;
use swffm\EUCountries\Models\EUCountryInterface;

class DistanceCountryToCountry extends Calculator
{

    protected $country1;

    protected $country2;

    private $earthRadius = '6378.1';


    function __construct( EUCountryInterface $country1, EUCountryInterface $country2 ){

        $this->country1 = $country1;

        $this->country2 = $country2;

        $this->calc();

    }

    public function calc( $arg=1 ) : object{

        // Convert degrees to radians
        $lat1_rad = $this->deg2rad($this->country1->centerLat);
        $lon1_rad = $this->deg2rad($this->country1->centerLon);
        $lat2_rad = $this->deg2rad($this->country2->centerLat);
        $lon2_rad = $this->deg2rad($this->country2->centerLon);
        
        // Differences in coordinates
        $delta_lat = bcsub($lat2_rad, $lat1_rad, 15);
        $delta_lon = bcsub($lon2_rad, $lon1_rad, 15);
        
        // Haversine formula
        $a = $this->bcsin(bcdiv($delta_lat, '2', 15), 15);
        $a = bcmul($a, $a, 15);
        $cos_lat1 = $this->bccos($lat1_rad, 15);
        $cos_lat2 = $this->bccos($lat2_rad, 15);
        $sin_delta_lon = $this->bcsin(bcdiv($delta_lon, '2', 15), 15);
        $sin_delta_lon = bcmul($sin_delta_lon, $sin_delta_lon, 15);
        $a = bcadd($a, bcmul(bcmul($cos_lat1, $cos_lat2, 15), $sin_delta_lon, 15), 15);
        
        $c = bcmul('2', $this->bcmath_atan2(bcsqrt($a, 15), bcsqrt(bcsub('1', $a, 15), 15), 15), 15);
        
        // Distance in kilometers
        $this->result = bcmul($this->earthRadius, $c, 15);
        return $this;

    }

    private function deg2rad($degrees) {

        return bcmul($degrees, bcdiv(M_PI, '180', 15), 15);

    }
    
    private function bcsin($value, $scale = 15) {

        return bcdiv(sin($value), '1', $scale);

    }
    
    private function bccos($value, $scale = 15) {

        return bcdiv(cos($value), '1', $scale);

    }
    
    private function bcmath_atan2($y, $x, $scale = 15) {

        return bcdiv(atan2($y, $x), '1', $scale);

    }

}