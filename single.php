<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Product</title>
</head>
<body>
<?php
		$host = 'localhost';
		$username = 'root';
		$password = 'root';
		$database = 'leonid_db';
		
		@$dbConnect = mysqli_connect($host,$username,$password,$database);
		if(!$dbConnect){
			echo "don't";
		}
        $id = $_GET['id'];
		$selectQueryString = "SELECT * FROM `products` where id = '$id'";

		$runQuery = mysqli_query($dbConnect, $selectQueryString);

		if(!$runQuery){
			echo "don't conect";
		}

		//@$getDataFromDB = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
        mysqli_close($dbConnect);
        $r = mysqli_fetch_assoc($runQuery);
    ?>
    

    

<div class = "product">
<h2 class = "name" ><?php echo $r['name']; ?></h2>
<img class = "" src="<?php echo $r['img']; ?>" alt="">
<p calss = "productinfo"><?php echo $r['content']; ?></p>
<h3 class = "gin">$<?php echo $r['pice']; ?> </h3>
</div>
<div></div>


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