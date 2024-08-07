<?php 

namespace swffm\EUCountries;

use swffm\EUCountries\Countries\EUCountriesListing;
use swffm\EUCountries\Models\EUCountryInterface;


class EUCountriesIterator implements \Iterator
{

    private $euCountries = null;

    private $position=0;


    function __construct(){

        $this->euCountries = EUCountriesListing::getEUCountries();

    }

    public function current() : EUCountryInterface
    {
        return $this->euCountries[$this->position];
    }

    public function next() : void
    {
        ++$this->position;
    }

    public function key() : int
    {
        return $this->position;
    }

    public function valid() : bool
    {
        return isset($this->euCountries[$this->position]);
    }

    public function rewind() : void
    {
        $this->position = 0;
    }

}