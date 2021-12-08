<?php 


function ProfileMenue () {

    $user = $_SESSION['sess_username'];

    

    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>

        <script>
            function signOut(){
                // console.log("hello world from sign out btn");
                <?php
                    $_SESSION['sess_bool'] = false;
                ?>
            }

            // function goToUser(){
            //     // console.log("hello world from sign out btn");
            //     <?php
            //        header("location:http://localhost/pxfoodmk3/mvc/index.php?flag=user");
            //     ?>
            // }
        </script>

            <button class="btn btn-secondary" onclick="goToUser()">
                <?php
                    echo $user;
                ?>
            </button>

            <button name="btn" type="button" id="signOut" onclick="signOut()" class="btn btn-primary">Sign Out</button>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
<?php 
} 
?>