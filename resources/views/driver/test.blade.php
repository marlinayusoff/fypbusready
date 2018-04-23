<php
	$con = mysqli_connect("localhost:3306","root","","busready");
	
	if (mysqli_connect_errno()) {
		echo "Nope" . mysqli_connect_error();
	}
	$username = $_GET["username"];
	$password = $_GET["password"];
	
	$sql = "SELECT * pemandu_bas WHERE username = '$username' AND password = '$password'";
	
	$result = mysqli_query($con, $sql);
	
	while ($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}
	header('Content-Type:Application/json');
	if (!empty($array)) {
		echo json_encode("Correct");
	} else {
		echo json_encode("False");
	}
	mysqli_free_result($result);
	mysqli_close($con);
?>