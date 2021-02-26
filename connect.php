<?php
	if($_SERVER["REQUEST_METHOD"]== "POST")
	{
		$conn = new mysqli('localhost','root','','test1');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		}
		else {
			$Roll_No = $_POST['Roll_No'];
			$Name = $_POST['Name'];
			$Department = $_POST['Department'];
			$Institute = $_POST['Institute'];
			
			$sql = "INSERT INTO `registration` (`Roll_No`, `Name`, `Department`, `Institute`) VALUES ('$Roll_No', '$Name', '$Department', '$Institute')";
			$stmt = mysqli_query($conn,$sql);
			if($stmt)
			{
				echo "Success";
			}
		}
	

	// Database connection
	
	}
?>
