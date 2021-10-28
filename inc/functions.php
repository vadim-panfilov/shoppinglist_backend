<?php

function openDB() {
    $db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}

function returnError(PDOexception $pdoex) {
    header('HTTP/1.1 50O Internal Server Error');
    $error = array('error' => $pdoex->getMessage());
    print json_encode($error);
}