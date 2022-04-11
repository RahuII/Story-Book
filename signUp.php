<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        session_start();
        // header('location:signUp.php');

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "wt", "wt", "wt");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $name =  $_REQUEST['name'];
        $uname = $_REQUEST['email'];
        $pwd = md5($_REQUEST['password']);

        $s = "select * from wt where uname = '$uname'";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
        ?>
            <script type="text/javascript">
                window.alert("user name is already taken")
            </script>
        <?php
        } else {
            $sql = "INSERT INTO wt  VALUES ('$uname','$pwd','$name')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['status'] = "SignUp Successfully";
                header("Location: logIn-page.php");
            } else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
        }
        // Close connection
        mysqli_close($conn);
        ?>

    </center>
</body>

</html>