<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="adminasset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="adminasset/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="adminasset/vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="adminasset/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="adminasset/css/custom_css/admin-login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <img src="img/logo.png" class="logo" alt="image not found">
                <h3 class="text-center">Admin Log In</h3>
                <form class="form" id="log_in" method="post">
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox"> Remember Password
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Log In">
                </form>
                <p class="text-right"><a href="user_forgot.html" class="text-warning forgot_color">Forgot Password?</a></p>
            </div>
        </div>
    </div>
    
</body>

</html>
