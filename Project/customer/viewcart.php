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

include "authguard.php";
include "../shared/connection.php";
include "menu.html";

$sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");

$total=0;

while($dbrow=mysqli_fetch_assoc($sql_result)){

    $total+=$dbrow["price"];
    echo "
    <div class='parent'>
        <div class='name'>$dbrow[name]</div>
        <div class='price'>$dbrow[price]</div>
        <img class='pdt-img' src='$dbrow[impath]'>
        <div>$dbrow[details]</div>
        <div class='text-center'>
            <a href='deletecart.php?cartid=$dbrow[cartid]'>
                <button class='btn btn-danger'>Remove from cart</button>
            </a>
        </div>
    
    </div>";
}
echo "<div>
    <div class='display-2'>Checkout </div>
    <div class='display-2'>Total:$total</div>
    <div class='text-center'>
       <a href='placeorder.php'>
           <button class='btn btn-success'>Place order</button>
        
    </div>
</div>";

?>