<?php
require 'db_connection.php';

function addNewCustomer($name, $phone, $email, $topic){
    global $db;

    $query = "INSERT INTO customers (name, phone, email, topic) VALUES ('$name', '$phone', '$email', '$topic')";

    if (!$db->query($query)){
        die ("$db->errno: $db->error");
    }
}

function selectAllFromTable($tableName){
    global $db;
    $array = array();

    $query = "SELECT * FROM $tableName";

    $query_result = $db->query($query);

    if (!$query_result)
        die ("$db->errno: $db->error");

    while ($row = mysqli_fetch_assoc($query_result))
        $array[] = $row;

    return $array;
}
