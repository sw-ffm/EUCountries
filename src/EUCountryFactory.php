<?php

namespace swffm\EUCountries;

use swffm\EUCountries\EUCountries;
use swffm\EUCountries\Countries\Austria;
use swffm\EUCountries\Countries\Belgium;
use swffm\EUCountries\Countries\Bulgaria;
use swffm\EUCountries\Countries\Croatia;
use swffm\EUCountries\Countries\Cyprus;
use swffm\EUCountries\Countries\CzechRepublic;
use swffm\EUCountries\Countries\Denmark;
use swffm\EUCountries\Countries\Estonia;
use swffm\EUCountries\Countries\Finland;
use swffm\EUCountries\Countries\France;
use swffm\EUCountries\Countries\Germany;
use swffm\EUCountries\Countries\Greece;
use swffm\EUCountries\Countries\Hungary;
use swffm\EUCountries\Countries\Ireland;
use swffm\EUCountries\Countries\Italy;
use swffm\EUCountries\Countries\Latvia;
use swffm\EUCountries\Countries\Lithuania;
use swffm\EUCountries\Countries\Luxembourg;
use swffm\EUCountries\Countries\Malta;
use swffm\EUCountries\Countries\Netherlands;
use swffm\EUCountries\Countries\Poland;
use swffm\EUCountries\Countries\Portugal;
use swffm\EUCountries\Countries\Romania;
use swffm\EUCountries\Countries\Slovakia;
use swffm\EUCountries\Countries\Slovenia;
use swffm\EUCountries\Countries\Spain;
use swffm\EUCountries\Countries\Sweden;

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

        }else if($country == "lv"){

            return new Latvia;

        }else if($country == "lt"){

            return new Lithuania;

        }else if($country == "lu"){

            return new Luxembourg;

        }else if($country == "mt"){

            return new Malta;

        }else if($country == "nl"){

            return new Netherlands;

        }else if($country == "pl"){

            return new Poland;

        }else if($country == "pt"){

            return new Portugal;

        }else if($country == "ro"){

            return new Romania;

        }else if($country == "se"){

            return new Sweden;

        }else if($country == "sk"){

            return new Slovakia;

        }else if($country == "si"){

            return new Slovenia;

        }else if($country == "es"){

            return new Spain;

        }else if($country == "cz"){

            return new CzechRepublic;

        }else if($country == "hu"){

            return new Hungary;

        }else if($country == "cy"){

            return new Cyprus;

        }else{

            throw new \Exception('Country ' . $country . ' not found!');

        }

    }

}