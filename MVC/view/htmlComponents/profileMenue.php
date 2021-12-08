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
            <style>
                .userInfo{
                    text-decoration: none;
                    color: white;
                    cursor: pointer;
                }

                .signOut{
                    text-decoration: none;
                    color: white;
                    cursor: pointer;
                }

                .signOut:hover{
                    color: white;
                }

                .userInfo:hover{
                    color: white;
                }

                .containerLarge{
                    /* border: 1px solid black; */
                    display: grid;
                    grid-template-columns: auto auto;
                    justify-content: right;
                }

                .spacer{
                    width: 42em;
                }

                .containerSmall{
                    margin-right: 1em;
                    display: grid;
                    grid-template-columns: auto auto;
                    justify-content: right;
                    grid-gap: 2em;
                    /* border: 2px solid black; */
                    /* width: 5em; */
                }

                .box{
                    /* border: 10px solid black; */
                    background-color: black;
                    border-radius: .25em;
                    padding: 1em;
                }

                .box:hover{
                    background-color: #282C34;
                    transition: .5s;
                }
                
            </style>
        </head>
        <body>

            <div class="containerLarge">
                <div class="spacer"></div>
                <div class="containerSmall">
                    <div class="box">
                        <a class="userInfo" href="index.php?flag=user">
                            <?php
                                echo $user;
                            ?>
                        </a>
                    </div>
                    <div class="box">
                        <a class="signOut" href="index.php?flag=kill">
                            Sign Out
                        </a>
                    </div>
                </div>
            </div>

            <!-- <button name="btn" type="button" id="signOut" onclick="signOut()" class="btn btn-primary">Sign Out</button> -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>
<?php 
} 
?>