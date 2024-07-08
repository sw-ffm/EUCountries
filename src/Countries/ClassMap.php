<?php 

namespace swffm\EUCountries\Countries;


class ClassMapper
{

    protected static $classMap = null;


    public static function createMap(){

        self::$classMap = [

            "at" => "swffm\\EUCountries\\Countries\\Austria",
            "be" => "swffm\\EUCountries\\Countries\\Belgium",
            "bg" => "swffm\\EUCountries\\Countries\\Bulgaria",
            "hr" => "swffm\\EUCountries\\Countries\\Croatia",
            "cy" => "swffm\\EUCountries\\Countries\\Cyprus",
            "cz" => "swffm\\EUCountries\\Countries\\CzechRepublic",
            "dk" => "swffm\\EUCountries\\Countries\\Denmark",
            "ee" => "swffm\\EUCountries\\Countries\\Estonia",
            "fi" => "swffm\\EUCountries\\Countries\\Finland",
            "fr" => "swffm\\EUCountries\\Countries\\France",
            "de" => "swffm\\EUCountries\\Countries\\Germany",
            "gr" => "swffm\\EUCountries\\Countries\\Greece",
            "hu" => "swffm\\EUCountries\\Countries\\Hungary",
            "ie" => "swffm\\EUCountries\\Countries\\Ireland",
            "it" => "swffm\\EUCountries\\Countries\\Italy",
            "lv" => "swffm\\EUCountries\\Countries\\Latvia",
            "lt" => "swffm\\EUCountries\\Countries\\Lithuania",
            "lu" => "swffm\\EUCountries\\Countries\\Luxembourg",
            "mt" => "swffm\\EUCountries\\Countries\\Malta",
            "nl" => "swffm\\EUCountries\\Countries\\Netherlands",
            "pl" => "swffm\\EUCountries\\Countries\\Poland",
            "pt" => "swffm\\EUCountries\\Countries\\Portugal",
            "ro" => "swffm\\EUCountries\\Countries\\Romania",
            "sk" => "swffm\\EUCountries\\Countries\\Slovakia",
            "si" => "swffm\\EUCountries\\Countries\\Slovenia",
            "es" => "swffm\\EUCountries\\Countries\\Spain",
            "se" => "swffm\\EUCountries\\Countries\\Sweden"

        ];

    }

    public static function get( $iso ) : string{

        if(is_null( self::$classMap )){

            self::createMap();

        }

        if( isset( self::$classMap[ $iso ] ) ){

            return self::$classMap[ $iso ];

        }

        return "";

    }

}