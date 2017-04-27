<?php
$servername = "localhost";
$username = "root";
$password = "";
$i=0;

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $sql = "use project";
$username;
if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sq2 = "delete from login";
$result = $conn->query($sq2);
if ($result->num_rows > 0) {
   } else { 
	
       
	
}
$sq2 = "insert into login values('NULL','user')";
if ($conn->query($sq2) === TRUE) {
    
} else {
    echo "Error: ";
}

 
$conn->close();
header('Location: index1.php');
?>
