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
include "database.php";
$result = mysqli_query($connect, "SELECT * FROM `cheliki`");
$arr = mysqli_fetch_all($result);

?>

<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
  <meta charset="UTF-8">
  <title>Users</title>
</head>
<style>
	th,td {
		padding: 10px;
	}

	th {
		background: #000000;
		color: #fff; 
	}

	td {
		background: #b5b5b5;
	}
</style>
<body>
<table  >
	<tr>
		 <th>Id</th>
         <th>Имя</th>
		 <th>Возраст</th>
	</tr>
	<?php
	foreach ($arr as $sub) {
	
	?>
	<tr>
<td><?= $sub[0] ?></td>
<td><?= $sub[1] ?></td>  
<td><?= $sub[2] ?></td>
<td><a href="delete.php?id=<?= $sub[0] ?>">Удалить</a></td>

    <?php }
	
	?>

</table>
</body>
</html>

