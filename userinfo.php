<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'yetourism');
if($connection){
    echo "Connection Succesful";
}else{
    echo "No conection";
}
mysqli_select_db($connection, 'yetourism');
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$place = $_POST['place'];
$comments = $_POST['comments'];
$query = "insert into userinfo (user, email, phone, place, comment)
values ('$username', '$email', '$phone', '$place', '$comments')";
echo "$query";
mysqli_query($connection, $query);
header('location:index.php');
?>
