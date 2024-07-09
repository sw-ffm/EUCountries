<?php

namespace swffm\EUCountries\Repositories;

use swffm\EUCountries\Models\Currency;


interface CurrencieRepositoryInterface
{
    public function getAll();
    public function getByISO( $iso );
    public function update( Currency $currencie );
}