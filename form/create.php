<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>HTML Document</title>
      <link rel="stylesheet" type="text/css" href="main.css">
   </head>
   <body>
   <header text-align = "center">
 <ul>
   <li><a href="wrdel.php"><b>Ученики </b></a></li>
   <li><a href="create.php"><b>Добавить</b> </a></li>
   <li><a href="update.php"><b>Изменить</b> </a></li>
 </ul>


</header>
   </body>
</html>
<?php
require_once 'database.php';
 $name =$_POST['name'];
 $age =$_POST['age'];

mysqli_query($connect, "INSERT INTO `cheliki` (`id`, `name`, `age`) VALUES (NULL, '$name', '$age')");
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>
<table>
    <form action="create.php" method="post">
    <p>Имя</p>
    <input type="text" name="name">
    <P>Возраст</p>
    <input type="int" name="age">
    <button type="submit">Добавить ученика</button>
    </form>
</table>
   </body>
</html>
