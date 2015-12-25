<?php

class CountryMobileCarriers {
  private static $_db = null;

  private function _getDB() {
    if(!self::$_db) {
      self::$_db = unserialize(file_get_contents(__DIR__."/db"));
    }
    return self::$_db;
  }

  public static function getList($country) {
    $db = &self::_getDB();
    if(!isset($db[$country])) {
      return [];
    }
    return $db[$country];
  }

  public static function getAll() {
    return self::_getDB();
  }
}