<?php
    include 'header.php';
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databases = "school";

    $conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" );
    $query = "SELECT * FROM students JOIN class WHERE sclass = cid ORDER BY sid";
    $result = mysqli_query( $conn, $query ) or die( 'Query faild' );
?>

<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php
                if ( mysqli_num_rows( $result ) > 0 ) {
                    while ( $rows = mysqli_fetch_assoc( $result ) ) {
                    ?>
            <tr>
                <td><?php echo $rows["sid"] ?></td>
                <td><?php echo $rows["sname"] ?></td>
                <td><?php echo $rows["saddress"] ?></td>
                <td><?php echo $rows["cname"] ?></td>
                <td><?php echo $rows["sphone"] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $rows['sid'] ?>">Edit</a>
                    <a href='delete-inline.php?id=<?php echo $rows["sid"] ?>'>Delete</a>
                </td>
            </tr>
            <?php
                }
                }
                mysqli_close( $conn );
            ?>


        </tbody>
    </table>
</div>
</div>
</body>

</html>
