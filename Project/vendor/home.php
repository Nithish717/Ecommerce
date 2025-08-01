<?php

include "authguard.php";
include "menu.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous">



</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="upload.php" method="post" class="w-50 bg-warning p-4" enctype="multipart/form-data">
        <h1 class="text-center">Upload Products</h1>
        <input class="form-control mt-3" type="text" placeholder="Product name" name="name" required>
        <input class="form-control mt-3" type="number" placeholder="Product price" name="price" required>
        <textarea class="form-control mt-3" placeholder="Product description" type="text" name="details" cols="30" rows="5" required></textarea>
        <input class="form-control mt-2" type="file" name="productimg" accept=".jpg,.png">

        <div class="text-center">
            <button class="btn btn-primary mt-3">Upload</button>
        </div>
    </form>
    </div>
</body>
</html>