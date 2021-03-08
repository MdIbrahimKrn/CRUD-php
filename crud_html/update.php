<?php include 'header.php';?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databases = "school";

?>

<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
        if ( isset( $_POST['showbtn'] ) ) {

            $conn = mysqli_connect( $servername, $username, $password, $databases ) or die( "connection faild" );
            $query = "SELECT * FROM students WHERE sid = {$_POST['sid']}";
            $result = mysqli_query( $conn, $query ) or die( 'Query faild' . mysqli_error( $conn ) );

            if ( mysqli_num_rows( $result ) == 1 ) {
                $row = mysqli_fetch_assoc( $result );
            ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname'] ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress'] ?>" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" disabled>Select Class</option>
                <?php
                    $query1 = "SELECT * FROM class";
                            $result1 = mysqli_query( $conn, $query1 ) or die( 'Query faild' );

                            if ( mysqli_num_rows( $result1 ) > 0 ) {
                                while ( $row1 = mysqli_fetch_assoc( $result1 ) ) {
                                    if ( $row1["cid"] == $row["sclass"] ) {
                                    ?>
                <option value="<?php echo $row1["cid"] ?>" <?php echo "selected" ?>><?php echo $row1["cname"] ?>
                </option>
                <?php
                    } else {
                                    ?>
                <option value="<?php echo $row1["cid"] ?>"><?php echo $row1["cname"] ?></option>
                <?php
                    }
                                }
                            }
                        ?>

            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>" />
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
    <?php
        } else {
                echo "this id have not data";
            }
        }

    ?>
</div>
</div>
</body>

</html>
