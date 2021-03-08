<?php
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['class'];
$sphone = $_POST['sphone'];
$sid = $_POST['sid'];

$servername = "localhost";
$username = "root";
$password = "";
$databases = "school";

$conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" );
$query = "UPDATE students SET sname = '{$sname}',saddress = '{$saddress}', sclass = '{$sclass}' , sphone = '{$sphone}'  WHERE  sid  = {$sid}";
$result = mysqli_query( $conn, $query ) or die( 'Query faild' . mysqli_error( $conn ) );

mysqli_close( $conn );

header( "location: http://localhost/crud_html/crud_html/index.php" );
/* if ( empty( $_POST['sname'] ) ) {
echo "this file is empty";
} else {
echo "this is full {$_POST['sname']}";
} */

?>
