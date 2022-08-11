<?php
//static properties
   class Weather {

    public static $tempConditions = ['cold','mild', 'warm'];

    public static function celsiusToFarenheit($c){
      return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
          return self::$tempConditions[0];
      }else if($f < 70){
          return self::$tempConditions[1];
      }else{
          return self::$tempConditions[2];
      }
    }

   }


   //print(Weather::$tempConditions);
   //echo Weather::celsiusToFarenheit(20);
   echo Weather::determineTempCondition(50);
/*
  $weatherInstance = new Weather();
   print_r($weatherInstance->tempConditions);
*/
?>

<html lang="en">
    <head>
        <title>PHP Dengan OOP </title>
    </head>
    <body>

    </body>
</html>