<?php

session_start();
if($_SESSION['login_status']==false){
    echo "Unauthorized Attempt";
    exit();
}

if($_SESSION['usertype']!="Vendor"){
    echo "Forbidden Access";
    exit();
}

?>