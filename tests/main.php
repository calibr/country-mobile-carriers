<?php

require "./CountryMobileCarriers.php";

class CountryMobileCarriersTest extends PHPUnit_Framework_TestCase
{
  public function testGetForRU() {
    $carriers = CountryMobileCarriers::getList("RU");
    $this->assertArraySubset([
      "Baykalwestcom",
      "Beeline",
      "INDIGO",
      "MOTIV",
      "MTS",
      "MegaFon",
      "Skylink",
      "Tele2",
      "Yota"
    ], $carriers);
  }
}