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
        $conn = mysqli_connect("localhost", "wt", "wt", "storybook");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $name =  $_REQUEST['name'];
        $uname = $_REQUEST['email'];
        $pwd = md5($_REQUEST['password']);

        $s = "select * from user where uname = '$uname'";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
        ?>
            <script type="text/javascript">
                window.alert("user name is already taken")
            </script>
        <?php
        } else {
            $sql = "INSERT INTO user  VALUES ('$uname','$name','$pwd')";
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