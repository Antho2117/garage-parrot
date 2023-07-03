<?php

try {
    $pdo = new PDO("mysql:host="._HOST_.";dbname="._DB_NAME_.";charset=utf8mb4", _DB_USER_, _DB_PASSWORD_);
} catch (Exception $e) {
    die("error :".$e->getMessage());
}