<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Website Warung Frozen Food</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/1.jpg'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>
        body {
            font-family: Roboto;
            color: #fe7968;
            background: #fe7968;
        }

        .jumbotron {
            background: rgba(100%, 100%, 100%, 0.1);
            color: #ffe0db;
        }

        .jumbotron label {
            color: #000000;
        }

        .login {
            width: 100px;
            height: 100px;
        }

        .btn-warning {
            background: #ec4f43;
            border-color: #ec4f43;
        }

        .btn-warning:hover {
            background: #fe948d;
            border-color: #fe948d;
        }

        .error-message {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center mt-5 mb-3">
                <img src="<?= base_url('assets/img/2.jpg'); ?>" class="login" />
                <h3 class="text-white mt-2">WEBSITE WARUNG FROZEN FOOD</h3>

                <?php
                if ($this->session->flashdata('alert')) {
                    echo '<div class="col-md-4 offset-md-4 mt-2"><div class="alert alert-danger" role="alert">
                    ' . $this->session->flashdata('alert') . '
                  </div></div>';
                }
                ?>

            </div>
            <div class="col-md-4 col-sm-12 offset-md-4">
                <div class="jumbotron py-3 pt-4">
                    <?= form_open(); ?>

                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i> Username</label>
                        <input type="text" class="form-control form-control-sm <?= (form_error('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('username', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="form-control form-control-sm <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" autocomplete="off" name="password">
                        <div class="invalid-feedback">
                            <?= form_error('password', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group float-right">
                        <button type="submit" name="submit" value="submit" class="btn btn-warning text-white btn-sm">LOGIN <i class="fa fa-sign-in"></i></button>
                    </div>

                    <div class="clearfix"></div>
                    <?= form_close(); ?>
                </div>
                <p class="text-white text-center">Copyright | &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> Website Warung Frozen Food | All rights reserved
                </p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>
