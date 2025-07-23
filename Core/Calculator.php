<?php

// Static Class with one function that's used to take in a number, and pass it to the right functionality
class Calculator
{
  public static function AddToCalc(string $postNumber)
  {
    // We reference our SESSION variables to our in-method variables. Changing anything here will also change the SESSION variables
    $calcString =& $_SESSION['calcString'];
    $operator =& $_SESSION['operator'];

    // If our input is a number, we add it to the calculation
    if (is_numeric($postNumber)) {
      $calcString .= $postNumber;
    }

    // If the user clicked "C", we just clear the calculation
    elseif ($postNumber == "C") {
      $calcString = "";
    }

    // If the user clicked "=", we first checked if anywhere in the string there is "/ 0".
    elseif ($postNumber == "=") {
      if (preg_match('/\/\s*0(\s|$)/', $calcString)) {
        $calcString = "";

      // If they didn't, return the entire calculation
      } else {
        $calcString = eval("return $calcString;");
      }
    }

    // If the user clicked "+", "-", "*" or "/", add it to the calculation.
    else {

      // We use trim to remove any white spaces. After, we use substr, which in our case will return the -1th (LAST) element of the string.
      $lastChar = substr(trim($calcString), -1);

      // We then check if the last given input is a operator. If it is, we ignore the input and await the next
      if (in_array($lastChar, ['+', '-', '*', '/'])) {
        return;
      }

      $calcString .= " $postNumber ";
    }
  }
}

?>