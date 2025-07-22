<?php

class Calculator
{
  static private int $zahl1;
  static private int $zahl2;
  protected static string $calculation = "345678";
  static private string $operator;

  public static function AddNrToCalc(string $number)
  {
    self::$calculation .= $number;
    echo self::$calculation;
  }

}

?>