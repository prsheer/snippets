<?php

require_once "Cookbook.php";

try {
    $dbh = Cookbook::connect();
    //print("Connected\n");
} catch (PDOException$e) {
    print("Cannot connect to server\n");
    print("Error code: " . $e->getCode() . "\n");
    print("Error message: " . $e->getMessage() . "\n");
    exit(1);
}