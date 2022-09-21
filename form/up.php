<?php
require_once 'database.php';

$id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM `cheliki` WHERE `id` = '$id'");
$user = mysqli_fetch_assoc($user);

?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Изменение данных</title>
 </head>
 <body>
 <table>
    <form action="forup.php" method="post">
        <input type="hidden" name="id" value="<?= $id['id'] ?>">
    <p>Имя</p>
    <input type="text" name="name" value="<?= $user['name'] ?>">
    <P>Возраст</p>
    <input type="int" name="age" value="<?= $user['age'] ?>">
    <button type="submit">Изменить данные</button>
    </form>
</table>
 </body> 
</html>