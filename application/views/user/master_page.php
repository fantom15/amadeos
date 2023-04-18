<?php
defined('BASEPATH') or exit('No direct script access allowed');

$method = $this->router->fetch_method();
$class = $this->router->fetch_class();

?>
<!DOCTYPE html>
<?php
$lang = $this->session->userdata('site_lang');
$languages_list = $this->Language_model->get_language();
$langs = ['english' => 'en', 'dutch' => 'de', 'arabic' => 'ar'];

$lang = ($lang) ? $lang : 'english';
?>
<html lang="<?= $langs[$lang] ?>" dir="<?= ($lang == 'arabic') ? 'rtl' : 'ltr' ?>">

<head>
    <base href="<?= base_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>User | Amadeos</title>

    <?php if ($lang == 'arabic') : ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <?php else : ?>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <?php endif; ?>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/js/circliful/dist/main.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/circliful/dist/circliful.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick-theme.css" />

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/slick-master/slick/slick.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/chartist-js/dist/chartist.css" />
    <script type="text/javascript" src="assets/chartist-js/dist/chartist.min.js"></script>
    <style>
        .content-section {
            margin-<?= ($lang == 'arabic') ? 'right' : 'left' ?>: 12vw;
        }

        @media (max-width: 991px) {
            .content-section {
                margin: 0;
            }
        }
    </style>
</head>

<body class="main-bg">
    <?php if ($class != 'q') : ?>
        <div class="col-12 bg-purple"></div>
    <?php endif; ?>
    <header class="desktop-menu">
        <nav class="pt-5">
            <div class="logo col-12 text-center">
                <a href="admin/dashboard">
                    <img src="assets/img/logo.png" style="width: 60px;" alt="" class="image">
                </a>
            </div>
            <div class="row">
                <div class="menu col-8 ">
                    <?php
                    $menu_array = [
                        ['home', 'home-2.svg'],
                        ['books', 'car.svg'],
                        ['profile', 'user-square.svg'],
                        ['message', 'sms.svg'],
                        ['progress', 'graph.svg']
                    ];
                    ?>
                    <ul style="width: 12vw; padding-left: 2vw; text-align: <?= ($lang == 'arabic') ? 'right' : 'left' ?>">
                        <?php for ($i = 0; $i < count($menu_array); $i++) : ?>
                            <li>
                                <a href="user/<?= $menu_array[$i][0] ?>" style="color: <?= ($menu_array[$i][0] == $class) ? '#6371F1' : '#B8B7BE' ?>">
                                    <img src="assets/img/svg/<?= ($menu_array[$i][0] == $class) ? 'blue-svg' : 'user-icon' ?>/<?= $menu_array[$i][1] ?>" style="width: 18px">
                                    <?= $this->lang->line('user_menu')[$menu_array[$i][0]]; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
            <div class="log-out col-12 pt-5" style="padding-<?= ($lang == 'arabic') ? 'right' : 'left' ?>: 2vw; text-align:<?= ($lang == 'arabic') ? 'right' : 'left' ?>">

                <?php foreach ($languages_list->result_array() as $language) : ?>
                    <a style="color: <?= (strtolower($language['en_lang_name']) == $lang) ? '#6371F1' : '#B8B7BE' ?>; font-size: 12px; text-decoration: none;" href="language_switcher/switch_lang/<?= strtolower($language['en_lang_name']) ?>"><?= $language['language_name'] ?></a>
                    <br>
                <?php endforeach; ?>
                <br><br>
                <a style="color: #B8B7BE;  text-decoration: none;" href="user/logout">
                    <img src="assets/img/svg/user-icon/logout.svg" style="width: 18px">
                    <?= $this->lang->line('user_menu')['logout']; ?>
                </a>
            </div>
        </nav>
    </header>
    <div id="bg-glass"></div>
    <?php if ($class != 'questions') : ?>
        <header class="col-2 mobile-menu">
            <nav>
                <div class="col-12" style="text-align: center; padding-top: 30px;">
                    <img src="assets/img/svg/24/menu.svg" style="width: 24px">
                    <span class="pink-color" id="mobile-menu-icon" style="font-weight: 600"><?= $this->lang->line('menu'); ?></span>
                </div>
                <div class="row" style="margin-top: -60px;">
                    <div class="col-12 mobile-menu-links pt-3">
                        <ul>
                            <li>
                                <img src="assets/img/svg/20/arrow-right-1.svg" style="width: 24px">
                                <span class="pink-color" style="font-size: 13px; font-weight: 600" id="menu-back"><?= $this->lang->line('back'); ?></span>
                            </li>
                            <li style="padding-top: 100px; padding-bottom: 100px;">
                                <a href="#">
                                    <img src="assets/img/logo.png" style="width: 50px; margin-top: -10px" alt="" class="image">
                                </a>
                            </li>
                            <li>
                                <a href="user/home">
                                    <img src="assets/img/admin_img/home-2.svg" style="width: 18px">
                                    <?= $this->lang->line('user_menu')['home']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="user/books">
                                    <img src="assets/img/svg/25/Normal/car.svg" style="width: 18px">
                                    <?= $this->lang->line('user_menu')['books']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="user/profile">
                                    <img src="assets/img/svg/25/Normal/user-square.svg" style="width: 18px">
                                    <?= $this->lang->line('user_menu')['profile']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="user/message">
                                    <img src="assets/img/svg/25/Normal/sms.svg" style="width: 18px">
                                    <?= $this->lang->line('user_menu')['message']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="user/progress">
                                    <img src="assets/img/svg/25/Normal/graph.svg" style="width: 18px">
                                    <?= $this->lang->line('user_menu')['progress']; ?>
                                </a>
                            </li>

                            <li style="margin-top: 100px">
                                <a href="user/logout">
                                    <img src="assets/img/svg/25/Normal/Group 166.svg" style="width: 18px">
                                    <?= $this->lang->line('user_menu')['logout']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <?php endif; ?>


    <div class="content-section" style="<?= ($class == 'questions') ? 'padding-top: 0' : '' ?>">
        <?= $content ?>
    </div>



    <script>
        $(document).ready(function() {
            $('#mobile-menu-icon').on('click', function() {
                $('.mobile-menu-links').toggle();
                $('#bg-glass').toggle();
            });

            $('#menu-back').on('click', function() {
                $('.mobile-menu-links').toggle();
                $('#bg-glass').toggle();
            });
        })
    </script>

</body>

</html>