<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login || SUTRAKABEL</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/css/startmin.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            function myFunction() {
                var x = document.getElementById("inputPassword");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Masuk Dashboard</h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('auth') ?>" method="POST" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Masukan Email / Username" name="inputEmailUsername" id="inputEmailUsername" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Masukan Kata sandi" name="inputPassword" id="inputPassword" type="password">
                                    </div>
                                    <div class="checkbox">
                                        <label><input name="show" id="show" type="checkbox" value="show" onclick="myFunction()">show kata sandi</label>
                                        <label style="margin-left: 75px;"><a href="<?php echo base_url('forgotpassword') ?>">lupa kata sandi ?</a></label>
                                    </div>
                                    <button type="submit" name="masuk" id="masuk" class="btn btn-lg btn-success btn-block">Masuk Akun</button>
                                    <!-- <div align="center">Anda belum punya akun, <a href="<?php echo base_url('register') ?>">Daftar disini ...</a></div> -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/js/startmin.js') ?>"></script>

    </body>
</html>
