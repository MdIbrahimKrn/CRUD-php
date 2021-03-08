<?php include 'header.php';?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" disabled selected>Select Class</option>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $databases = "school";

                    $conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" );
                    $query = "SELECT * FROM class";
                    $result = mysqli_query( $conn, $query ) or die( 'Query faild' );

                    if ( mysqli_num_rows( $result ) > 0 ) {
                        while ( $row = mysqli_fetch_assoc( $result ) ) {
                        ?>
                <option value="<?php echo $row["cid"] ?>"><?php echo $row["cname"] ?></option>
                <?php
                    }
                    }
                    mysqli_close( $conn );
                ?>

            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" name="submit" type="submit" value="Save" />
    </form>

</div>
</div>
</body>

</html>
