<?php

require_once 'database.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
mysqli_query($connect, "UPDATE `cheliki` SET `name` = '$name', `age` = '$age' WHERE `cheliki` . `id` = '$id'");
header('Location: update.php');