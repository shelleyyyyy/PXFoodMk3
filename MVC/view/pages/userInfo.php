<?php



function viewUserInfo(){
    $username = $_SESSION['sess_username'];
    $name = $_SESSION['sess_name'];
    $email = $_SESSION['sess_email'];
    $phone = $_SESSION['sess_phone'];
    $pass = $_SESSION['sess_pass'];
    ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                .user-info{
                    display: grid;
                    grid-template-columns: auto auto;
                    margin: 3em;
                    border: 1px solid black;
                }

                .user-info > div{
                    padding: 1em;
                    border: 1px solid black;
                    font-size: 2em;
                }

                .user-info-box{
                    font-weight: 700;
                    /* text-align: right; */
                }

            </style>
        </head>
        <body>
            <div class="user-info">
                <div class="user-info-box">
                    username
                </div>
                <div class="user-info-boxa">
                    <?php
                        echo $username;
                    ?>
                </div>

                <div class="user-info-box">
                    name
                </div>
                <div class="user-info-boxa">
                    <?php
                        echo $name;
                    ?>
                </div>

                <div class="user-info-box">
                    email
                </div>
                <div class="user-info-boxa">
                    <?php
                        echo $email;
                    ?>
                </div>

                <div class="user-info-box">
                    phone
                </div>
                <div class="user-info-boxa">
                    <?php
                        echo $phone;
                    ?>
                </div>
            </div>
        </body>
        </html>

<?php
}