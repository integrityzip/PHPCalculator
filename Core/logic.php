<?php

require_once 'Calculator.php';

if (session_status() === PHP_SESSION_NONE) {
    session_name('calculator');
    session_start();
}

if (!isset($_SESSION['calcString'])) {
  $_SESSION['calcString'] = '';
}

if (!isset($_SESSION['nr1'])) {
  $_SESSION['nr1'] = '';
}

if (!isset($_SESSION['nr2'])) {
  $_SESSION['nr2'] = '';
}

if (!isset($_SESSION['operator'])) {
  $_SESSION['operator'] = '';
}

if (!isset($_SESSION['nr1'])) {
  $_SESSION['nr1'] = '';
}

if (isset($_POST['button_value'])) {
  Calculator::AddNrToCalc($_POST['button_value']);
  header("Location: " . $_SERVER['PHP_SELF']);
}

?>