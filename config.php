<?php session_start();
// define('DBNAME','addmition');
// define('DBUSER','root');
// define('DBPASS','');
// define('DBHOST','localhost');
// try{
// 	$db=new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
// 	$db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	//echo "Your page is connected with database successfully.";

// } catch(PDOException $e){
// echo "Issue -> connection failed: " . $e->getMessage();
// }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>