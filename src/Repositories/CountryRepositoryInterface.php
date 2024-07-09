<?php

namespace swffm\EUCountries\Repositories;

use swffm\EUCountries\EUCountry;

interface CountryRepositoryInterface
{
    public function getAll();
    public function getByISO( $iso );
    public function update( EUCountry $country );
}