<?php

function viewHome(){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PX Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
          background-color: #282C34;
        }

        .title{
          color: white;
          text-align: center;
          margin: 1em auto 1em auto;
        }

        .container{
            margin: 2em auto 2em auto;
        }

        .d-block{
          display: block;
          margin: 0 auto 0 auto;
        }

        .card{
            margin-bottom: 2em;
        }

        .row{
            margin: 0 auto 0 auto;
            justify-content: center;
        }

        .col{
            display: block;
            /* justify-content: center; */
            margin: 0 auto 0 auto;
        }

    </style>

</head>
<body>

    <h1 class="title">
        PX Food

    </h1>

    <div id="carouselExampleSlidesOnly" class="carouselContainer carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/healthy-eating-ingredients-1296x728-header.jpg" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/healthy-eating-ingredients-1296x728-header.jpg" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/healthy-eating-ingredients-1296x728-header.jpg" class="d-block w-50" alt="...">
            </div>
        </div>
    </div>

    <h1 class="title">Announcements</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://static01.nyt.com/images/2021/02/17/dining/17tootired-grilled-cheese/17tootired-grilled-cheese-articleLarge.jpg?quality=75&auto=webp&disable=upscale" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Freshins</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, excepturi.</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://static01.nyt.com/images/2021/02/17/dining/17tootired-grilled-cheese/17tootired-grilled-cheese-articleLarge.jpg?quality=75&auto=webp&disable=upscale" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Freshins</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, excepturi.</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.gannett-cdn.com/media/2019/08/05/USATODAY/usatsports/247WallSt.com-247WS-565444-fast-food.jpg?auto=webp&crop=1365,768,x0,y0&format=pjpg&width=1200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PX Grill</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, excepturi.</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://static01.nyt.com/images/2021/02/17/dining/17tootired-grilled-cheese/17tootired-grilled-cheese-articleLarge.jpg?quality=75&auto=webp&disable=upscale" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Freshins</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, excepturi.</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.packaging-gateway.com/wp-content/uploads/sites/2/2021/04/Starbucks.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Starbucks</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, excepturi.</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://static01.nyt.com/images/2021/02/17/dining/17tootired-grilled-cheese/17tootired-grilled-cheese-articleLarge.jpg?quality=75&auto=webp&disable=upscale" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Freshins</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, excepturi.</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
}