<?php

session_start();

if (isset($_POST['value']) && !empty($_POST['value'])) {
    $_SESSION['lang'] = $_POST['value'];
    echo json_encode(['ok']);
}
