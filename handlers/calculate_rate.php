<?php
session_start();

require $_SERVER['DOCUMENT_ROOT']. "/lib/db_functions.php";
require $_SERVER['DOCUMENT_ROOT']. "/lib/functions.php";

$now_year = date("o", strtotime('now'));

$array_age = selectAllFromTable('age_norm');
$array_city = selectAllFromTable('city_norm');
$array_date_rate = selectAllFromTable('date_rate_norm');
$array_hp = selectAllFromTable('hp_norm');
$array_insurance = selectAllFromTable('insurance_norm');
$array_category = selectAllFromTable('category_norm');

$name = clearData($_POST['name']);
$birthday = clearData($_POST['birthday']);
$prava = clearData($_POST['prava']);
$category = clearData($_POST['category']);
$car_name = clearData($_POST['car_name']);
$car_birthday = clearData($_POST['car_birthday'], "i");
$hp = clearData($_POST['hp'], "i");
$insurance_type = clearData($_POST['insurance_type']);
$city = clearData($_POST['city']);
$date_rate = clearData($_POST['date_rate']);

// Количество полных лет
$year_birthday = date("o", strtotime($birthday));
$final_birthday = $now_year - $year_birthday;

// Количество лет стажа
$year_prava = date("o", strtotime($prava));
$final_prava = $now_year - $year_prava;

$rate_city = rateCity($city, $array_city);
$rate_date_rate = rateDateRate($date_rate, $array_date_rate);
$rate_hp = rateHp($hp, $array_hp);
$rate_insurance = rateInsurance($insurance_type, $array_insurance);
$rate_age = rateAge($final_birthday, $final_prava, $array_age);

$price = findCategory($category, $array_category);

$mult = $rate_city * $rate_date_rate * $rate_hp * $rate_insurance * $rate_age;
$price *= $mult;

$_SESSION['total'] = $price;
header('Location: /result_calc.php');
die;
