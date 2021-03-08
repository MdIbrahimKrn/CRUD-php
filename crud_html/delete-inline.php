<?php
$servername = "localhost";
$username = "root";
$password = "";
$databases = "school";
$sid = $_GET["id"];

$conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" . mysqli_connect_error() );
$query = " DELETE FROM students WHERE sid = {$sid}";
$result = mysqli_query( $conn, $query ) or die( 'Query faild' . mysqli_connect( $conn ) );

mysqli_close( $conn );

header( "location: http://localhost/crud_html/crud_html/index.php" );

?>
