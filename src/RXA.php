<?php
namespace KucingKalenk\RXA;

class RXA {
  public function greet (String $sName) {
    return 'Hi Hello ' . $sName . '! How are you doing today?';
  }

  public static function loadJson ($json_path = null) {
    $file = file_get_contents($json_path);
    $json = json_decode($file);
    return $json;
  }

  public static function empty ($val) {
    if (in_array($val,['',null])) {
      return true;
    }
    return false;
  }
}
