<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	$pdo = new PDO("mysql:host=localhost;dbname=qwerty;","root","");//подключение к базе
	$statement = $pdo->prepare("SELECT * FROM user");//оброщение к user
	$statement->execute();//получает ответ с базы данных
	$users = $statement->fetchAll(PDO::FETCH_ASSOC);//оброщается к прописаным пораметрам
	?>
<h1>User</h1>
<form action="index.php" method="post">
<button class="create_btn" href="#">Create</button>
</form>
<div>
	<div>
		<table>
			<thead>
				<br>
				<th>id</th>
				<th>name</th>
				<th>email</th>
			</thead>
			<?php foreach ($users as $user => $value) {?>
			<tbody class="tbody">
				<tr>
					<td><?php echo $value ["id"]; ?></td>
					<td><?php echo $value ["name"]; ?></td>
					<td><?php echo $value ["email"]; ?></td>
					<td>
						<br>
						<form action="show.php" method="post">
						<a class="btn_show" href="show.php?id=<?php echo $value['id'] ?>">Show</a>
						<a class="btn_edit" href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
						<a class="btn_delete" href="delete.php?id=<?php echo $value['id'] ?>">Delete</a>
						</form>
					</td>
				</tr>
			</tbody>
		<?php } ?>
		</table>
	</div>
</div>
<style type="text/css">
	.create_btn{
		padding: 10px;
		background: green;
		color: white;
	}
	.a{
		text-decoration: none;
	}
	.btn_show{
		padding: 10px;
		background: blue;
		color: white;
	}
	.btn_edit{
		padding: 10px;
		background: orange;
		color: white;
	}
	.btn_delete{
		padding: 10px;
		background: red;
		color: white;
	}
</style>
</body>
</html>