<?php
		$host = 'localhost';
		$username = 'root';
		$password = 'root';
		$database = 'leonid_db';
		
		@$dbConnect = mysqli_connect($host,$username,$password,$database);
		if(!$dbConnect){
		echo "don't conect";
			
		}

		$selectQueryString = "SELECT * FROM `products` ";

		$runQuery = mysqli_query($dbConnect, $selectQueryString);

		if(!$runQuery){
			print_r(mysqli_connect_error($dbConnect));
			die();
		}

		// @$getDataFromDB = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
		mysqli_close($dbConnect);
	?>
	


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Donat</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>


<div class="blocks">
<?php //foreach($getDataFromDB as $value) {
	while($r = mysqli_fetch_assoc($runQuery)){?>
<div class="block">
	<img class = "podimg" src="<?php echo $r['img']; ?>" width="200">
<h2><a class = "name" href ="single.php?id=<?php echo $r['id']; ?>"><?php echo $r['name'] ?>  </a></h2>
<p><?php echo $r['content']; ?></p>
<h3 class = "gin">$<?php echo $r['pice']; ?> </h3>
</div>
	<?php } ?>
</div>



	<a class="download" href="https://sg-public-api.hoyoverse.com/event/download_porter/trace/ys_global/genshinimpactpc/default?url=https%3A%2F%2Fact.hoyoverse.com%2Fpuzzle%2Fhk4e%2Fpz_MbGXG2vgVO%2Findex.html%3Fpz_plat%3Dpc%26lang%3Den-us%26game_biz%3Dhk4e_global%26bridge_name%3Dpz_MbGXG2vgVO    ">
        <span class="dan">Download</span>
    </a>

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
				<li><a href="products.php">Product</a></li>
            </ul>
        </div>
</body>
</html>