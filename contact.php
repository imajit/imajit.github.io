<?php
$host = "localhost";
$db_name = "eid";
$username = "root";
$password = "";
echo "Done";
 
if(!$_POST) exit;
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

echo "Done";
$last_name     = $_POST['last_name'];

echo "Done";
// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
echo "Done";
 
// 3. prepare select query
$query = "insert into election values('aadhar_num',false,'party','hashhumai')";
echo "Done";
  
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
echo "Done";
$con->close();
?>