<?php
echo $sname = $_POST['sname'];
echo $saddress = $_POST['saddress'];
echo $sclass = $_POST['class'];
echo $sphone = $_POST['sphone'];

$servername = "localhost";
$username = "root";
$password = "";
$databases = "school";

$conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" );
$query = "INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{$sname}','{$saddress}','{$sclass}','{$sphone}')";
$result = mysqli_query( $conn, $query ) or die( 'Query faild' );

header( "location: http://localhost/crud_html/crud_html/index.php" );
/* if ( empty( $_POST['sname'] ) ) {
echo "this file is empty";
} else {
echo "this is full {$_POST['sname']}";
} */
mysqli_close( $conn );
?>
