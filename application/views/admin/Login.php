<!DOCTYPE html>
<html>
    <head>
        <?php $url = base_url() ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login <?=COPANYNAME ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo $url . ("assets/") ?>plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo $url . ("assets/") ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $url . ("assets/") ?>dist/css/adminlte.min.css">

    </head>
    <body class="hold-transition login-page" style="background: #0000ff4a;">

        <div class="login-box">
            <div class="login-logo">
                <b>Login</b>
            </div>
			admin / admin
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg"><?php //echo lang('login_subheading');  ?></p>

                    <div id="infoMessage"><?php //echo $message;  ?></div>



                    <form class="form-horizontal" method="POST" action="<?php echo $url; ?>admin/Auth/LoginChk"  id="LoginForm">


                        <div class="input-group mb-3">
                            <input type="text" name="name1" id="name1" placeholder="Enter Name" class="form-control" autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password1" id="password1" placeholder="Enter Password" class="form-control" autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">

                                    <input type="checkbox" id="remember" name="remember" value="">		
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-4">
                                <input type="submit" name="submit" value="Login"  class="btn btn-primary btn-block" >
                            </div>
                        </div>
                    </form>
                    <p class="mb-1"> <a href="forgot_password"></a></p>
                </div>
            </div>
        </div>

    </body>
</html>