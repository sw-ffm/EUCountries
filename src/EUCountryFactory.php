<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountries;
use swffm\EUCountries\Countries\Austria;
use swffm\EUCountries\Countries\Belgium;
use swffm\EUCountries\Countries\Bulgaria;
use swffm\EUCountries\Countries\Croatia;
use swffm\EUCountries\Countries\Denmark;
use swffm\EUCountries\Countries\Estonia;
use swffm\EUCountries\Countries\Finland;
use swffm\EUCountries\Countries\France;
use swffm\EUCountries\Countries\Germany;
use swffm\EUCountries\Countries\Greece;
use swffm\EUCountries\Countries\Ireland;
use swffm\EUCountries\Countries\Italy;

class EUCountryFactory 
{

    public static function generate( $country="de" ) : EUCountries
    {

        $country = strtolower( $country );

        if($country == "de"){

            return new Germany;

        }else if($country == "at"){

            return new Austria;

        }else if($country == "be"){

            return new Belgium;

        }else if($country == "bg"){

            return new Bulgaria;

        }else if($country == "hr"){

            return new Croatia;

        }else if($country == "dk"){

            return new Denmark;

        }else if($country == "ee"){

            return new Estonia;

        }else if($country == "fi"){

            return new Finland;

        }else if($country == "fr"){

            return new France;

        }else if($country == "gr"){

            return new Greece;

        }else if($country == "ie"){

            return new Ireland;

        }else if($country == "it"){

            return new Italy;

        }else{

            throw new \Exception('Country ' . $country . ' not found!');

        }

    }

}