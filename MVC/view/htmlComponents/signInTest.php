<?php 

include 'view/htmlComponents/registerModal.php';
include 'view/htmlComponents/profileMenue.php';
include 'view/htmlComponents/signInModal.php';

function TestBlockHTML () { 
	
	$bool = false;
	
	if($bool == false){?>
        
        <html>
            <head>
                <style>
                    body{
                        margin: 0;
                    }

                    .container{
                        /* border: 1px solid hotpink; */
                        /* justify-content: right; */
                        display: grid;
                        grid-template-columns: auto auto;
                        
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="box">
                        <?php
                            RegisterModal();
                        ?>
                    </div>
                    <div class="box">
                        <?php
                            SignInModal();
                        ?>
                    </div>
                </div>
            </body>
        </html>

    <?php
    }else{
        ProfileMenue();
    }
} 

?>  



