<?php

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
            

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">Register</button>

            <div class="modal" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Register</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="../../index.php" method="get">
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Name</label>
                              <input  name="name" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Username</label>
                              <input name="username" type="text" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input  name="email" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Phone</label>
                                <input  name="phone" type="text" class="form-control" id="inputPassword4">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Password</label>
                                <input  name="password" type="text" class="form-control" id="inputEmail4">
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Confrim Password</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div> -->

                            <input type="hidden"  name="flag" value="newRegister">

                            <input class="btn btn-primary" type="submit"  name="Add Book">

                          </form>

                    </div>
                  </div>
                </div>
              </div>
            
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