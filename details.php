<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost","root","","blog");
$query = "select * from post where id=$id";
$myq = mysqli_query($connect,$query);
foreach ($myq as $data){
    $title = $data['title'];
    $artical = $data['artical'];
    $img = $data['img'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="design/css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="design/css/style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="design/css/all.css">
    <title><?= $title ; ?> </title>
    <style>
    </style>
</head>

<body>


<section class="about py-5" id="about">
    <div class="container">

        <div class="row">
            <div class="col-10 mx-auto col-md-6 my-5">
                <h1 class="text-capitalize"><strong class="banner-title "><?= $title; ?></strong></h1>
                <p class="my-4 text-muted w-75"><?= $artical; ?></p>


            </div>
            <div class="col-10 mx-auto col-md-6 align-self-center my-5">
                <div class="about-img__container">
                    <img src="img/<?= $img ; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jquery -->
<script src="design/js/jquery-3.3.1.min.js"></script>
<!-- bootstrap js -->
<script src="design/js/bootstrap.bundle.min.js"></script>
<!-- script js -->
<script src="design/js/app.js"></script>
</body>

</html>
