<?php 
$title='Login';
require_once'include/header.php';
?>
<?php 
require_once'include/navbar.php';
?>
<!-- Start Page here -->
        <div class="row vh-70 justify-content-md-center">
            <div class="card shadow" style="width: 18rem;">
                <div class="card-header text-center">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="" method="$POST">
                        <div class="form-group form_input">
                            <label for="user">User Name</label>
                            <input type="text" class="form-control" name="user" />
                        </div>
                        <div class="form-group form_input">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="userpassword" />
                        </div>
                        <input type="submit" class=" mt-4 btn btn-primary btn-sx w-100 shadow" value="Login" name="">
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>&copy; KurirApp 2021</small>
                </div>
            </div>
        </div>
<!-- end page here -->
<?php
require_once'include/footer.php';
?>          