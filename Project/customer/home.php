<?php
include "authguard.php";
?>

<html>
    <head>
        <style>
            .parent{
                background-color:maroon;
                color:white;
                display:inline-block;
                margin: 10px;
                vertical-align:top;
                padding: 10px;
            }
            .pdt-img{
                width: 100%;
                height: 100px;
            }
            .name{
                font-size:24px;
                font-weight:bold;
            }
            .price{
                color:blue;
                font-size:20px;
            }
            .price::after{
                content:"Rs";
                font-size:15px;
            }
        </style>
    </head>
</html>




<?php
include "menu.html";

$conn=new mysqli("localhost","root","","project",3306);

$sql_result=mysqli_query($conn,"select * from product");

while($dbrow=mysqli_fetch_assoc($sql_result)){
    // print_r($dbrow);
    // echo "<br>";
    echo "
    <div class='parent'>
        <div class='name'>$dbrow[name]</div>
        <div class='price'>$dbrow[price]</div>
        <img class='pdt-img' src='$dbrow[impath]'>
        <div>$dbrow[details]</div>
        <div class='text-center'>
            <a href='addcart.php?pid=$dbrow[pid]'>
                <button class='btn btn-warning'>Add to cart</button>
            </a>
        </div>
    
    </div>";
}


?>