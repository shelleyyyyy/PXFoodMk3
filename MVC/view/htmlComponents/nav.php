<?php


include "view/htmlComponents/signInTest.php";

class siteMenue{

    function __construct(){


	

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- <title></title> -->

    <style>
      body{
        background-color: #282C34;
      }

        .container{
            display: flex;
            justify-content: center;
            font-family: sans-serif;
        }

        .nav-item{
            text-align: center  ;
            padding: 1em;
        }

        .link{
            text-decoration: none;
            color: black;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: .75em;
            padding-bottom: 3px;
        }

        .link:hover{
            text-align: center;
            color: lightgray;
            transition: .5s;
        }

        .nav-item:hover{
            border-bottom: 3px solid lightgray;
            padding-bottom: 0;
            transition: .1s;
        }

        .btn{
          display: block;
          margin: 0 1em 0 auto;
        }

		.showTest{
			color: hotpink;
			/* font-size: 4em; */
			text-align: right;
		}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PX Food</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?flag=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?flag=grill">Grill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?flag=fresh">Freshins</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?flag=smoth" tabindex="-1">Smothies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?flag=star">Starbucks</a>
              </li>
            </ul>
            
			<?php
				TestBlockHTML();
			?>



          </div>
        </div>
      </nav>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php

    }
}

?>