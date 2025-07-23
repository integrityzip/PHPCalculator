<?php

require_once 'Calculator.php';

if (session_status() === PHP_SESSION_NONE) {
    session_name('calculator');
    session_start();
}

if (!isset($_SESSION['calcString'])) {
  $_SESSION['calcString'] = '';
}

if (!isset($_SESSION['operator'])) {
  $_SESSION['operator'] = '';
}


// if the user presses one of the buttons, take its values and pass it to a function in Calculator.php. Afterwards, clear POST.
if (isset($_POST['button_value'])) {
  Calculator::AddToCalc($_POST['button_value']);
  header("Location: " . $_SERVER['PHP_SELF']);
}

?>