<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "hexdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user VALUES ('$username', '$email', '$pass')";
		
		if(mysqli_query($conn, $sql)){
			?>
			<script>
				alert('Values have been inserted');
			</script>
			<?php
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
