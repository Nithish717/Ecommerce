<?php

print_r($_POST);

if($_POST['password']!=$_POST['password2']){
    echo "Passwords doesn't match";
    exit();
}

$conn=new mysqli("localhost","root","","project",3306);
$status=mysqli_query($conn,"insert into user(username,password,usertype) values('$_POST[username]','$_POST[password]','$_POST[usertype]')");


if($status){
    echo "<h1>Signup success</h1>";
}
else{
    echo "Signup failed";
    echo mysqli_error($conn);
}


?>