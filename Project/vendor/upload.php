<?php
include "authguard.php";

print_r($_POST);
echo "<br>";
print_r($_FILES);
echo "<br>";
echo $_FILES['productimg']['tmp_name'];

$filename=$_FILES['productimg']['name'];

$source_path=$_FILES['productimg']['tmp_name'];
$target_path="../shared/image/".$filename;

move_uploaded_file($source_path,$target_path);

$conn=new mysqli("localhost","root","","project",3306);

mysqli_query($conn,"insert into product(name,price,details,impath,owner) values('$_POST[name]',$_POST[price],'$_POST[details]','$target_path',$_SESSION[userid])");

?>