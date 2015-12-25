<?php

$url = "http://mcc-mnc.com/";

$html = file_get_contents($url);

$rows = preg_match_all(
  '@<tr><td>([0-9]+)</td><td>([0-9]+)</td><td>([a-z]+)</td><td>.+?</td><td>[0-9]+</td><td>(.+?)</td></tr>@i',
  $html, $matches, PREG_SET_ORDER
);

$db = [];

foreach($matches as $match) {
  $country = strtoupper($match[3]);
  $mcc = (int)$match[1];
  $mnc = (int)$match[2];
  $carrier = trim($match[4]);
  if(!isset($db[$country])) {
    $db[$country] = [];
  }
  $db[$country][] = [
    "name" => $carrier,
    "mcc" => $mcc,
    "mnc" => $mnc
  ];
}

file_put_contents("db", serialize($db));