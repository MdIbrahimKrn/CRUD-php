<?php
    include 'header.php';
    if ( isset( $_POST["deletebtn"] ) ) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databases = "school";
        $sid = $_POST["sid"];

        $conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" . mysqli_connect_error() );
        $query = " DELETE FROM students WHERE sid = {$sid}";
        $result = mysqli_query( $conn, $query ) or die( 'Query faild' . mysqli_connect( $conn ) );
        if ( $result ) {
            header( "location: http://localhost/crud_html/crud_html/index.php" );
        } else {
            echo "id is not correct!!!";

        }
        mysqli_close( $conn );

    }

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>
