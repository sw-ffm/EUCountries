<?php 

namespace swffm\EUCountries\Calc;


abstract class Calculator 
{

    protected $vat; 

    protected $net; 

    protected $gross;

    protected $result;

    protected $country;


    abstract public function calc();


    public function getVat() : string{

        return $this->vat;

    }

    public function getNet() : string{

        return $this->net;

    }

    public function getGross() : string{

        return $this->gross;

    }

    public function getResult() : string{

        return $this->result;

    }

}