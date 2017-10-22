<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author student
 */
class User {

    const STATUS_USER = 1;
    const STATUS_ADMIN = 2;

    private $user_name;
    private $password;
    private $full_name;
    private $email;
    private $date;
    private $status;

    function __construct($user_name, $full_name, $email, $password) {
        $this->user_name = $user_name;
        $this->password = hash("md5", $password);
        $this->full_name = $full_name;
        $this->email = $email;
        $this->date = new DateTime();
        $this->status = User::STATUS_USER;
    }

    function createUser($user_name, $password, $full_name, $email, $date, $status) {
        $this->user_name = $user_name;
        $this->password = $password;
        $this->full_name = $full_name;
        $this->email = $email;
        $this->date = $date;
        $this->status = $status;
    }

    function show() {
        echo 'User: ' . $this->user_name . '<br>'
        . '' . $this->full_name . '<br>'
        . '' . $this->email . '<br>'
        . '' . $this->date->format('Y-m-d') . '<br>'
        . '' . $this->status . '<br>'
        . ' password: ' . $this->password . '<br>'
        . '';
    }

    function printUser() {
        echo 'User: ' . $this->user_name . '<br>'
        . '' . $this->full_name . '<br>'
        . '' . $this->email . '<br>'
        . '' . $this->date . '<br>'
        . '' . $this->status . '<br>'
        . ' password: ' . $this->password . '<br>'
        . '';
    }

    static function checkForm($user_name, $full_name, $email, $password) {
        if (!is_null($user_name) &&
                !is_null($full_name) &&
                !is_null($email) &&
                !is_null($password) &&
                strlen($password) > 8 &&
                filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new User($user_name, $full_name, $email, $password);
        } else {
            return null;
        }
    }

    static function showAllUsers() {
        $allUsers = simplexml_load_file('users.xml');
        echo "<ul>";
        foreach ($allUsers as $user):
            $userName = $user->username;
            $password = $user->passwd;
            $fullname = $user->fullname;
            $email = $user->email;
            $date = $user->date;
            $status = $user->status;

            $fetchedUser = new User(null, null, null, null);
            $fetchedUser->createUser($userName, $password, $fullname, $email, $date, $status);
            echo $fetchedUser->printUser() . "<hr>";
        endforeach;
        echo "</ul>";
    }

    function save() {
        $xml = simplexml_load_file('users.xml');
        $xmlCopy = $xml->addChild("user");
        $xmlCopy->addChild("username", $this->user_name);
        $xmlCopy->addChild("passwd", $this->password);
        $xmlCopy->addChild("fullname", $this->full_name);
        $xmlCopy->addChild("email", $this->email);
        $xmlCopy->addChild("date", $this->date->format('Y-m-d H:i:s'));
        $xmlCopy->addChild("status", $this->status);
        $xml->asXML('users.xml');
    }

    function getUser_name() {
        return $this->user_name;
    }

    function getPassword() {
        return $this->password;
    }

    function getFull_name() {
        return $this->full_name;
    }

    function getEmail() {
        return $this->email;
    }

    function getDate() {
        return $this->date;
    }

    function getStatus() {
        return $this->status;
    }

    function setUser_name($user_name) {
        $this->user_name = $user_name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFull_name($full_name) {
        $this->full_name = $full_name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
