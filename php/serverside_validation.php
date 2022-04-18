<?php
// Error messages
$nameEmptyErr = "";
$emailEmptyErr = "";
$passwordEmptyErr = "";
$nameErr = "";
$emailErr = "";
$passwordErr = "";
if (isset($_POST["submit"])) {
    // Set form variables
    $name = checkInput($_POST["name"]);
    $email = checkInput($_POST["email"]);
    $password = checkInput($_POST["password"]);
    // Name validation
    if (empty($name)) {
        $nameEmptyErr = '<div class="error">
                Name can not be left blank.
            </div>';
    } // Allow letters and white space 
    else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = '<div class="error">
                Only letters and white space allowed.
            </div>';
    } else {
        echo $name . '<br>';
    }
    // Email validation
    if (empty($email)) {
        $emailEmptyErr = '<div class="error">
                Email can not be left blank.
            </div>';
    } // E-mail format validation
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $emailErr = '<div class="error">
                    Email format is not valid.
            </div>';
    } else {
        echo $email . '<br>';
    }
    // password verification 
    if (empty($password)) {
        $passwordEmptyErr = '<div class="error">
        password can not be left blank.
    </div>';
    } else if (!preg_match("/^[A-Za-z0-9!@#$%^&*()_]{6,20}$/", $password)) {
        $passwordErr = '<div class = "error">Password formate is not valid</div>';
    } else {
        echo $password;
    }
}
function checkInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

<!-- this is the php code -->