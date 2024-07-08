<?php 

namespace swffm\EUCountries\Database;


class PDOConnector
{

    private static $instance = null;
    

    private function __clone(){}

    public function __wakeup(){

        throw new \Exception("Cannot unserialize a singleton.");
    
    }

    private function __construct(){}

    public static function getInstance(){

        if ( self::$instance === null ){

            self::$instance = new \PDO( 'sqlite:' . __DIR__ . '/../../data/countries.sqlite' );

        }

        return self::$instance;

    }    

}