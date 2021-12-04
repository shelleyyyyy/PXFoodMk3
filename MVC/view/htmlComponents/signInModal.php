<?php function SignInModal () { ?>

        <html>
            <body>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</button>

                <div class="modal" tabindex="-1" id="signInModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sign In</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                        <form class="row g-3" action="index.php" method="get">

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Username</label>
                                <input name="username" type="text" class="form-control" id="inputPassword4">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Password</label>
                                <input  name="password" type="text" class="form-control" id="inputEmail4">
                            </div>

                            <input type="hidden"  name="flag" value="newRegister">
                            <input class="btn btn-primary" type="submit"  name="Add Book">
                        </form>
                    </div>
                </div>
            </body>
        </html>

<?php 

} 

?>  