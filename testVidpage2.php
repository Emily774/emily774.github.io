<?php
echo "page2! Welcolme, ";
echo $_POST['email'];
$username = $_POST["email"];
echo $username."<br>";
$password = $_POST["password"];
echo $password."<br>";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
password_verify("password", $hashedPassword);

if(password_verify('flipflops', $hashedPassword) && $username === "Flipsy@co") {
    echo "Password is Correct"."<br>";
    echo "<a href=/login-sample/login-sample.html>Continue</a>";
//    header('http://localhost:1234/login-sample/login-sample.html', false);

}
else {
    echo "Password is Incorrect";
    session_start();
    $_SESSION['logged-in']= true;
}


?>