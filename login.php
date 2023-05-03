<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "hexdb";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM `user`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = mysqli_fetch_assoc($result)) {
            echo "Roll No: " . $row["username"]
            . " - Name: " . $row["email"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>