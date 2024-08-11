<?php
include("config.php");

if(isset($_POST['signin'])){
    $email = $_POST["email"];
    $password = $_POST["password"];


$sql = "SELECT * FROM login WHERE s_email = '$email' and s_password = '$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row['s_email'];
    header("Location: homepage.php");
    exit();
}
else{
    echo "Not found. Incorrect Email or Password!!";
}
}


if(isset($_POST['signup'])){
    $email1 = $_POST["email"];
    $password1 = $_POST["password"];
    $name = $_POST["f_name"];

    $sql1 = "INSERT INTO login (firstname,s_email,s_password) VALUES ('$name','$email1','$password1')";
    if($conn->query($sql1) == TRUE){
        header("Location: index.php");
    }
    else{
        header("Location: homepage.php");
    }
}
?>