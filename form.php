<?php
$db = mysqli_conect('localhost','root','root','leonid_db');


if(!$db){
    echo 'DB not conect';
}else{

    if(isset($_POST['add'])){

        $name =$_POST['name'];
        $content =$_POST['content'];
        $img = $_POST['img'];
        $price = $_POST['price'];
    
        $sql = "INSERT INTO `products`( `name`, `content`, `img`, `price`) VALUES ('$name','$content','$img',$price)";
    
        $query = mysqli_query($db,$sql);
   
        mysqli_close($db);
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="adminc.css" >
</head>
<body>

    <div class="form">
    <form  method="post" >
        <label>Product name</label>
         <input name='name' >

         <label>Product content</label>
         <input name='content' >
+
         <label>Product image</label>
         <input name='img' >

         <label>Product price</label>
         <input name='price' >

         <input type="submit" value="Add New" name='add' >
        </form>
    </div>
    
    
</body>
</html>