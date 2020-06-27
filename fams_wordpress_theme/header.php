<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fams</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mama.css">
    <link rel="stylesheet" href="https://use.typekit.net/hac2arl.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5be6e7c1ad.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>
<body class="mama_back">
    <header class="width_100">
        <div class="top_logo width_100 flex_box flex_end justify_content_spacebetween">
            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/fams_logo/fams_logo_blue.svg" alt="fams_logo"></a>
            <div class="fams_switch">
                <a class="active" href="<?php echo get_template_directory_uri(); ?>/index.html">ママ</a>
                <a href="<?php echo get_template_directory_uri(); ?>/wakuwaku.html">ワクワク</a>
                <a href="#">ドクター</a>
            </div>
        </div>
        <div class="top_nav flex_box justify_content_center margin_96_0">
            <nav class="width_100">
                <ul class="flex_box justify_content_spacearound align_items_center margin_0_auto">
                    <li><a href="">製品情報</a></li>
                    <li><a href="">よくあるご質問</a></li>
                    <li><a href="">あわあわ体操</a></li>
                    <li><a href="">取扱店舗</a></li>
                    <li><a href="">コラム</a></li>
                    <li><a href="">お役立ち</a></li>
                    <li><a href=""><i class="fab fa-twitter fa-2x"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram fa-2x"></i></a></li>
                    <li><a href="https://fams-skin.com/baby/index.html?ASPName=gltd&gclid=Cj0KCQjwudb3BRC9ARIsAEa-vUvlncDlVeuBrTry9axPPXO8FTKHhmtzLjTWXStlRyKS3TVouGxjyLsaAiziEALw_wcB&trflg=1">ONLINE SHOP</a></li>
                </ul>
            </nav>
        </div>
    </header>