<?php

$conn=mysqli_connect("localhost","root","","shop");
if(!$conn){
    echo "Database connect error";
}


   if(isset($_POST['save']))
   {
        $username = $_POST['userName'];
        $phonenumber = $_POST['PhoneNumber'];
        $productnumber = $_POST['tpn'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $productdetails = $_POST['Pdetails'];

        $insert_query = "INSERT INTO product(username,phonenumber,productnumber,date,address,productdetails) VALUES('$username','$phonenumber','$productnumber','$date','$address','$productdetails')";
        $result = mysqli_query($conn,$insert_query);
	    if ($result) {
	  echo "<script>alert('Your Record Sucessfully Inserted.');window.location.href = 'order.php';</script>";
	
	    }
        else{
		echo "error";
        
	    }


   }
   ?>