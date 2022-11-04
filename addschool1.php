<?php
 	include ("connections.php");
	 
	/*$create_table = mysqli_query($conn,'Create TABLE school_data (school_id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), email VARCHAR(50), mobile INT(12), address VARCHAR(150), city VARCHAR(20), state VARCHAR(20), country VARCHAR(20),pincode INT(6), created_date datetime)');
	if($create_table){
		echo "Table Created Successfully";
	}else{
		echo "Error creating table: " . mysqli_error($conn);
	} */
 
if(isset($_POST['email'])){
    $name=$_POST["name"];
	$email=$_POST["email"];
	$moblie=$_POST["moblie"];
	$address=$_POST["address"];
	$country=$_POST["country"];
    $city=$_POST["city"];
    $state=$_POST["state"];
  	$pin=$_POST["pin"];
	$logo = $_FILES['logo']['name'];
    $tempname = $_FILES["logo"]["tmp_name"];
	$date = date("Y-m-d h:i:sa");
	print_r($_POST);
	print_r($_FILES);
    $folder = "assets/school/". $logo;
	if (move_uploaded_file($tempname, $folder)) {
		$insert_table = mysqli_query($conn, "INSERT INTO school_data 
		(name, email, mobile, address, country, city, state,  pincode, logo, created_date) 
		VALUES ('$name','$email','$mobile','$address','$country','$city','$state','$pin','$logo','$date')
		");
		if($insert_table){
			echo "Table Created Successfully";
			header('Location: schools.php');
		}else{
			echo "Error creating table: " . mysqli_error($conn);
		}
	}else{
		echo "Error creating table: " . mysqli_error($conn);
	}
}
?>