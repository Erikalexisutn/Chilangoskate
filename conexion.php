<?php
$servername = "localhost";
$username = "root";
$password = "Narutovsgo";

$myDB="skateshop";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "<script>alert('Connected successfully')</script>";
} catch(PDOException $e) {
  echo  "<script>alert('Connection failed:')</script>" . $e->getMessage();
}
return $conn;
?>