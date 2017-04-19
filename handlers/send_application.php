<?php
session_start();

require $_SERVER['DOCUMENT_ROOT']. "/lib/db_functions.php";
require $_SERVER['DOCUMENT_ROOT']. "/lib/functions.php";

$name = clearData($_POST['name']);
$phone = clearData($_POST['phone']);
$email = clearData($_POST['email']);
$topic = clearData($_POST['topic']);

$phone_final = "+7-";
$phone_final .= $phone;

$_SESSION['name'] = $name;

addNewCustomer($name, $phone_final, $email, $topic);

header("Location: ../thanksRequest.php");
die;