<?php
	
	if(!isset($_GET['type'])){
		
		echo 'Տվյալները բացակայում են';
		die();
	}

	$host = 'localhost'; // գրում ենք հասցեն
	$username = 'root'; // գրում ենք օգտատիրոջ անունը
	$password = 'root'; // գրում ենք գաղտնառը
	$database = 'leonid_db'; // գրում ենք տվյալների բազայի անունը
	
	///// Միանում ենք տվյալների բազային
	// Շնիկի նշանը դնում ենք որպեսզի սխալները չբերի
	@$dbConnect = mysqli_connect($host,$username,$password,$database);
	///// $dbConnect փոփոխականի մեջ պահվում է բազայի օբյեկտը
	// Ստուգում ենք արդյոք հաստատվել է կապը բազայի հետ
	if(!$dbConnect){
		// Եթե կապը չի հաստատվել տպում ենք սխալը և դուրս գալիս
		print_r (mysqli_connect());
		die();
	}
	// Գրում ենք	հարցումը
	//$selectQueryString = "SELECT * FROM `users` ";
	@$name = $_GET['name'];
	@$content = $_GET['content'];
	@$img = $_GET['img'];
	@$pice = $_GET['pice'];

	if($_GET['type'] == 'create'){
		$queryString = "INSERT INTO `products`(`name`,`content`,`img`,`pice`) VALUES('$name', '$content', '$img',$pice) ";
	}else if($_GET['type'] == 'update'){
		if(!isset($_GET['id'])){
			echo 'ID ն բացակայում է';
			die();
		}
		$id = $_GET['id'];
		$queryString = "UPDATE `products` SET `name` = '$name', `content` = '$pice', `img` = '$content', `pice` = $pice  WHERE `id`= $id ";

	}else if($_GET['type'] == 'delete'){
		if(!isset($_GET['id'])){
			echo 'ID ն բացակայում է';
			die();
		}
		$id = $_GET['id'];
		$queryString = "DELETE FROM `products` WHERE `id`= $id ";
	}
	// Աշխատացնում ենք	հարցումը
	@$runQuery = mysqli_query($dbConnect, $queryString);
	// Ստուգում ենք արդյոք հարցումը ճիշտ է աշխատել
	if(!$runQuery){
		// Եթե հարցումը չի աշխատել ապա տպում ենք սխալը և դուրս գալիս
		//print_r(mysqli_connect_error($dbConnect));
		echo mysqli_connect_error($dbConnect);
		die();
	}
	header("Location: http://localhost:8888/spykich/admin/index.php");

	mysqli_close($dbConnect);

	//Ավարտ	


?>