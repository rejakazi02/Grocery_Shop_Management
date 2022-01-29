<?php 

$conn=mysqli_connect("localhost","root","","shop");
if (!$conn) {
	echo "database connection error";
}


if (isset($_POST['save'])) {
	
	$productname = $_POST['productname'];
	$productprice = $_POST['productprice'];
	$productweight = $_POST['productweight'];
	


// for uploading image

   $media = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];

    $path='images/'.$media;
    move_uploaded_file($tmp_name,$path);

            

//------------------------------------

	$insert_query = "INSERT INTO product_list(productname,productprice,productweight,image) VALUES('$productname','$productprice','$productweight','$media')";
	$result = mysqli_query($conn,$insert_query);
	if ($result) {
		echo "<script>alert('Your Record Sucessfully Inserted.');window.location.href = 'product_add.php';</script>";
	
	}else{
		echo "error";
	}

}


 ?>