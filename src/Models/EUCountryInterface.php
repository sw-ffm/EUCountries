<?php

namespace swffm\EUCountries\Models;


abstract class EUCountryInterface
{

    public int $id;

    public string $iso;

    public string $nameGerman;

    public string $nameLocal;

    public string $nameEnglish;

    public string $capitalCity;

    public string $centerLat;

    public string $centerLon;

    public string $vatRate;

    public string $currencyId;

    public string $currencyIso;

    public string $currencySymbol;

    public string $rateToEuro;

}