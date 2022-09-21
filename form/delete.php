<?php

require_once('database.php');

$id =$_GET['id'];

mysqli_query($connect, "DELETE FROM cheliki WHERE `cheliki`.`id` = '$id'");
header('Location: wrdel.php');