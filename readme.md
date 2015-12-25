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

```