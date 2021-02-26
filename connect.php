<?php
if (isset($_POST['Roll_no'])) {
    $Roll_No = $_POST['Roll_No'];
 }

if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
 }

 if (isset($_POST['Department'])) {
     $Department = $_POST['Department'];
  }
  if (isset($_POST['Institute'])) {
      $Institute = $_POST['Institute'];
   }

	// Database connection
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
   else {
		$stmt = $conn->prepare("INSERT into registration(Roll_No,Name,Department,Institute) values(?, ?, ?, ?)");
		$stmt->bind_param("isss",$Roll_No, $Name, $Department, $Institute);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>
