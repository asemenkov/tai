<?php

include 'User.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function findLang($elem) {
    if (isset($_REQUEST[$elem]) && ($_REQUEST[$elem] != "")) {
        $found = htmlspecialchars(trim($_REQUEST[$elem]));
        return $found;
    }
}

$login = findLang("login");
$pass = findLang("pass");
$name = findLang("name");
$email = findLang("email");

$validationResult = User::checkForm($login, $name, $email, $pass);

if (!is_null($validationResult)) {
    $validationResult->show();
    $validationResult->save();
} else {
    echo "Not all fields compete.";
}

