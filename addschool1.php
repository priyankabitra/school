<?php
echo "<h2>Out Put:</h2>";
if(isset($_POST['data'])){
    $id=$_POST["id"];
    $logo=$_POST["logo"];
    $name=$_POST["name"];
	$email=$_POST["email"];
	$moblie=$_POST["moblie"];
	$address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $country=$_POST["country"];
	$pin=$_POST["pin"];

    echo "ID:".$id;
	echo "<br>";

    echo "Logo:".$logo;
	echo "<br>";

	echo "Name:".$name;
	echo "<br>";
	 
	echo "Email:".$email;
	echo "<br>";
	 
	echo "Moblie:".$moblie;
	echo "<br>";
	
	echo "Address:".$address;
	echo "<br>";

    echo "City:".$city;
	echo "<br>";

    echo "State:".$state;
	echo "<br>";

    echo "Country:". $country;
	echo "<br>";
	
	echo "Pincode:".$pin;
	echo "<br>";
	
}
?>