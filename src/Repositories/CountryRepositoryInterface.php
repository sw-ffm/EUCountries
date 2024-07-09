<?php

namespace swffm\EUCountries\Repositories;

use swffm\EUCountries\Models\EUCountryInterface;


interface CountryRepositoryInterface
{
    public function getAll();
    public function getByISO( $iso );
    public function update( EUCountryInterface $country );
}