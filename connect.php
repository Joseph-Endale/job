	<?php
	$position = $_POST['position'];
	$type = $_POST['type'];
	$location = $_POST['location'];
	$description = $_POST['description'];
	$level = $_POST['level'];
	$salary = $_POST['salary'];

	// Datbase connection
	$conn = new mysqli('localhost', 'root', '', 'test');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(position, type, location, description, level, salary) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $position, $type, $location, $description, $level, $salary,);
		$execval = $stmt->execute();
		echo $execval;
		header("LOCATION: confirmation1.html");
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	?>