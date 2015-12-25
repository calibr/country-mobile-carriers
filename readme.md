## Returns list of mobile carriers for specific country

### Install

`composer require calibr/country-mobile-carriers`

### Usage

```php

$carriers = CountryMobileCarriers::getList("RU");

/**
 * carriers array will look like this:
 * [
 *     "Baykalwestcom",
 *     "Beeline",
 *     "INDIGO",
 *     "MOTIV",
 *     "MTS",
 *     "MegaFon",
 *     "Skylink",
 *     "Tele2",
 *     "Yota"
 *   ]
 */

$allCarriers = CountryMobileCarriers::getAll();

/**
 * allCarriers array will look like this:
 * [ "RU" => [
 *     "Baykalwestcom",
 *     "Beeline",
 *     "INDIGO",
 *     "MOTIV",
 *     "MTS",
 *     "MegaFon",
 *     "Skylink",
 *     "Tele2",
 *     "Yota"
 *   ]
 *  ...
 * ]
 */

```

Database is taken from https://www.ip2location.com/mobile-carrier-coverage.