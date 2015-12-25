<?php

$url = "https://www.ip2location.com/mobile-carrier-coverage";

$html = file_get_contents($url);

$rows = preg_match_all(
  '@<tr><td style="text-align:center;">([A-Z]{2})</td><td>(.+?)</td><td style="text-align:center;">(.+?)</td><td style="text-align:right;">[0-9,.]+?</td></tr>@i',
  $html, $matches, PREG_SET_ORDER
);

$db = [];

foreach($matches as $match) {
  $country = $match[1];
  $carrier = $match[3];
  if(!isset($db[$country])) {
    $db[$country] = [];
  }
  $db[$country][] = $carrier;
}

file_put_contents("db", serialize($db));