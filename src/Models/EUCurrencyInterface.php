<?php

namespace swffm\EUCountries\Models;


abstract class EUCurrencyInterface
{

    public int $id;

    public string $iso;

    public string $symbol;

    public string $rateToEuro;

}