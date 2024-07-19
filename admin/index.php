<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
		.tb{
    border-collapse:collapse;
		}
	.tb th,td{
    border:1px solid #ccc;
	}
	</style>
</head>
<body>
	<?php
		$host = 'localhost';
		$username = 'root';
		$password = 'root';
		$database = 'leonid_db';
		
		@$dbConnect = mysqli_connect($host,$username,$password,$database);
		if(!$dbConnect){
			
			echo (mysqli_connect());
			die();
		}

		$selectQueryString = "SELECT * FROM `products` ";

		@$runQuery = mysqli_query($dbConnect, $selectQueryString);

		if(!$runQuery){
			print_r(mysqli_connect_error($dbConnect));
			die();
		}

		@$getDataFromDB = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
		mysqli_close($dbConnect);
	?>
	<div class = "admin">
	<form action="form.php" method="get">
		<input type="text" name="id" style="display:none;" value="<?= isset($_GET['id'])? $_GET['id']:'' ?>" <?= !isset($_GET['id'])?'disabled':'' ?> placeholder="id">
		<input type="text" name="name" placeholder="name" value="<?= isset($_GET['name'])? $_GET['name']:'' ?>">
		<input type="text" name="content" placeholder="content" value="<?= isset($_GET['content'])? $_GET['content']:'' ?>">
		<input type="text" name="img" placeholder="img" value="<?= isset($_GET['img'])? $_GET['img']:'' ?>">
		<input type="text" name="pice" placeholder="pice" value="<?= isset($_GET['pice'])? $_GET['pice']:'' ?>">
		<input type="text" style="display:none;"  name="type" value="<?= isset($_GET['type'])? $_GET['type']:'create' ?>">
		<input type="submit" name="submit" value="RUN">
	</form>
	<div>
		<table class="tb">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>PRICE</th>
					<th>DESCRIPTION</th>
					<th>IMAGE</th>
					<th>ACTION</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($getDataFromDB as $value): ?>
					<tr>
						<td><?= $value['id'] ?></td>
						<td><?= $value['name'] ?></td>
						<td><?= $value['content'] ?></td>
						<td><?= $value['img'] ?></td>
						<td><?= $value['pice'] ?></td>
						<td><a href="index.php?id=<?= $value['id']?>&type=update&name=<?=$value['name']?>&content=<?=$value['content']?>&img=<?=$value['img']?>&pice=<?=$value['pice	']?>">UPDATE</a></td>
						<td><a href="form.php?id=<?= $value['id']?>&type=delete">DELETE</a></td>
					</tr>
				<?php endforeach; ?> 	
			</tbody>
		</table>
	</div>
	</div>

	<div class="hder">
            <div class="logo"> <img class="img" src="https://upload.wikimedia.org/wikipedia/ru/thumb/5/5d/Genshin_Impact_logo.svg/1024px-Genshin_Impact_logo.svg.png?20231028060936    "></div>
           
            <ul>
                <li><a href="html.php">Home</a> </li>
                <li><a href="monshtad.php">Monshtad</a> </li>
                <li><a href="li%20ue.php">Li Yue</a></li>
                <li><a href="inadzuma.php">Inadzuma</a> </li>
                <li><a href="sumeru.php">Sumeru</a> </li>
                <li><a href="fontine.php"> Fontein</a></li>
                <li><a href="contact.php">Contact</a></li>
				<li><a href="admin/index.php">Admin</a></li>
				<li><a href="products.php">Products</a></li>
            </ul>
        </div>

</body>
</html>