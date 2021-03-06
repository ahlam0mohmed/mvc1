
<?php

include ('../_template/header.php'); 

?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Account Login</h3>
                </div>
                <div class="panel-body">
                    <form action="<?= ("login.php"); ?>" method="post">
                        <div class="form-group">
                            <label for="email-input">Email <span class="text-danger">*</span></label>
                            <input type="text" id="email-input" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password-input">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password-input" class="form-control" name="password" />
                        </div>
                        <div class="checkbox">
                            <label for="remember">
                                <input type="checkbox" id="remember" name="remember" /> Remember me
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        <a href="" class="btn btn-link">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include ('../_template/footer.php')

?>