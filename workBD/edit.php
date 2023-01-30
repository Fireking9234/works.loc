<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

	$pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
	$statement = $pdo->prepare('SELECT * FROM user WHERE id=:id');
	$statement->execute($_GET);
	$user = $statement->fetch(PDO::FETCH_ASSOC);
	?>


	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Edit</h3>
			<div class="row">
				<div class="col-md-6">
					<form action="update.php" method="post">
						<input type="hidden" name="id" class="form-control" value="<?php echo $user['id'] ?>">
						<input type="text" name="name" class="form-control" value="<?php echo $user['name'] ?>">
						<input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>">
						<button type="submit" class="btn btn-warning" style="margin-top:;">Edit user</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>