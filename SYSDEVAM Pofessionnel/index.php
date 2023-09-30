<?php
session_start();

if (isset($_SESSION['lang'])) {
    if (!empty($_SESSION['lang'])) {
        if ($_SESSION['lang'] == 'fr') {
            require './lang/fr/francais.php';
        } elseif ($_SESSION['lang'] == 'en') {
            require './lang/en/anglais.php';
        }
    } else {
        require './lang/fr/francais.php';
    }
} else {
    require './lang/fr/francais.php';
}

