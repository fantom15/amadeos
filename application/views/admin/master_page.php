<?php
defined('BASEPATH') or exit('No direct script access allowed');

$method = $this->router->fetch_method();
$class = $this->router->fetch_class();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= base_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Amadeos</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/admin_style.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body class="main-bg">

    <header class="desktop-menu">
        <nav class="pt-5">
            <div class="logo col-12 text-center">
                <a href="admin/dashboard">
                    <img src="assets/img/logo.png" style="width: 60px;" alt="" class="image">
                </a>
            </div>
            <div class="row">
                <div class="menu col-8 ">
                    <ul style="width: 12vw; padding-left: 2vw;">
                        <?php $menus = $this->Permission_model->menu(); ?>
                        <?php if ($menus) : ?>
                            <?php foreach ($menus as $menu) : ?>
                                <li>
                                    <a style="<?php if ($class == $menu['menu_name']) echo 'color:#5BBEB7;' ?>" href="<?= 'admin/' . $menu['menu_name'] ?>">
                                        <?php if ($menu['menu_name'] == $class) : ?>
                                            <img src="assets/img/svg/green-svg/<?= $menu['icon'] ?>" style="width: 18px">
                                        <?php else : ?>
                                            <img src="assets/img/svg/<?= $menu['icon'] ?>" style="width: 18px">
                                        <?php endif; ?>
                                        <?= $menu['title'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="log-out col-12 pt-5" style="padding-left: 2vw">
                <a style="color: #B8B7BE;  text-decoration: none;" href="logout">
                    <img src="assets/img/svg/logout.svg" style="width: 18px">
                    Log out
                </a>
            </div>
        </nav>
    </header>

    <header class="col-2 mobile-menu">
        <nav>
            <div class="row" style="padding-top: 20px;">
                <div class="col-6" style=" padding-left: 30px">
                    <a href="admin/dashboard">
                        <img src="assets/img/logo.png" style="width: 50px; margin-top: -10px" alt="" class="image">
                    </a>
                </div>
                <div class="col-6" style="text-align: right; padding-right: 30px">
                    <span id="mobile-menu-icon">menu</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mobile-menu-links pt-3">
                    <ul>
                        <?php $menus = $this->Permission_model->menu(); ?>
                        <?php if ($menus) : ?>
                            <?php foreach ($menus as $menu) : ?>
                                <li>
                                    <a style="<?php if ($class == $menu['title']) echo 'color:#5BBEB7;' ?>" href="<?= 'admin/' . $menu['menu_name'] ?>"><?= $menu['title'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>


    <div class="content-section">
        <?= $content ?>
    </div>



    <script>
        $(document).ready(function() {
            $('#mobile-menu-icon').on('click', function() {
                $('.mobile-menu-links').toggle();
            });
        })
    </script>

</body>

</html>