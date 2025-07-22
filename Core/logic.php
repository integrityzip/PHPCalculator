<?php

if (session_status() === PHP_SESSION_NONE) {
    session_name('calculator');
    session_start();
}

if (!isset($_SESSION['calcString'])) {
  $_SESSION['calcString'] = '';
}

?>