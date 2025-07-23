<?php

class Calculator
{
  public static function AddNrToCalc(string $number)
  {
    $_SESSION['calcString'] .= $number;
  }
}

?>