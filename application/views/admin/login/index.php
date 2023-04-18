<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?= base_url() ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Amadeos</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <style>
        .main-bg{
            background: linear-gradient(287.56deg, rgba(91, 190, 183, 0) 12.47%, rgba(255, 255, 255, 0.32) 75.66%), #EEFCFB;;
        }

        .login-form{
            background-color: #fff;
            min-height: 200px;
            border: 1px solid #fff;
            border-radius: 5px;
            margin-top: 150px;
        }
    </style>
</head>
<body class="main-bg">
<div class="container">
    <div class="row">
        <div class="col-10 col-lg-4 offset-1 offset-lg-4">
            <div class="col-12 login-form p-5">
                <?php
                $email = '';
                if($this->session->has_userdata('login_data')){
                    $email = $this->session->has_userdata('login_data')['email'];
                }
                ?>
                <form method="post" action="">
                    <div class="form-group">
                        <label>Email: </label>
                        <input class="form-control" type="text" value="<?= $email; ?>" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input class="form-control" type="text" name="password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info mt-3" type="submit">Login</button>
                    </div>
                </form>
                <?php if($this->session->flashdata('login_message')): ?>
                    <div class="alert mt-3 <?= $this->session->flashdata('login_alert'); ?>">
                        <?= $this->session->flashdata('login_message'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

        })
    </script>
</div>
</body>
</html>
