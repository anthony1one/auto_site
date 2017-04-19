<?php
$db = mysqli_connect("localhost", "root", "", "auto_site_db");
if ($db->connect_error)
    die("$db->connect_errno: $db->connect_error");
$db->query("SET NAMES 'utf8'");
