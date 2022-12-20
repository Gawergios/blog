<?php
$connect = mysqli_connect("localhost","root","","blog");
$query = "select * from post";
$myq = mysqli_query($connect,$query);

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
    <title>blog</title>
    <style>
    </style>
</head>

<body>




<!-- store -->
<section id="store" class="store py-5">
    <div class="container">


        <!-- store  items-->
        <div class="row" class="store-items" id="store-items">
            <!-- single item -->
            <?php foreach ($myq as $data) : ?>
            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                <div class="card ">
                    <div class="img-container">
                        <a href="details.php?id=<?= $data['id'];?> "><img src="img/<?= $data['img']; ?>" class="card-img-top store-img" alt=""></a>
                        <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="store-item-name"><?= $data['title']; ?></h5>
                            <h5 class="store-item-value"><strong id="store-item-price" class="font-weight-bold"><?= $data['artical'] ?></strong></h5>
`
                        </div>
                    </div>


                </div>
                <!-- end of card-->
            </div>
            <?php endforeach; ?>
            <!--end of single store item-->

        </div>
</section>
<!--end of store items -->


<!-- modal-container -->
<div class="container-fluid ">
    <div class="row lightbox-container align-items-center">
        <div class="col-10 col-md-10 mx-auto text-right lightbox-holder">
            <span class="lightbox-close"><i class="fas fa-window-close"></i></span>
            <div class="lightbox-item"></div>
            <span class="lightbox-control btnLeft"><i class="fas fa-caret-left"></i></span>
            <span class="lightbox-control btnRight"><i class="fas fa-caret-right"></i></span>
        </div>

    </div>
</div>


<!-- jquery -->
<script src="design/js/jquery-3.3.1.min.js"></script>
<!-- bootstrap js -->
<script src="design/js/bootstrap.bundle.min.js"></script>
<!-- script js -->
<script src="design/js/app.js"></script>
</body>

</html>