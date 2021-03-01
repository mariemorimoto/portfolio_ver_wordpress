<?php 
    // エラー表示あり
    // ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="MaireMorimoto-Portfolio- 福井">
<meta name="description" content="<?php bloginfo('discription'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/common/icon/favicon.ico" >
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/common/icon/apple-touch-icon-precomposed.png">
<title><?php bloginfo('name'); ?>-</title>
<?php wp_head(); ?>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138717503-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-138717503-1');
</script>

<body id="body" <?php body_class(); ?>>

<h1>MaireMorimoto-Portfolio-</h1>

<div class="wrap">
<!--border-->
<header id="header" class="top"><div class="headerIn ontainer">
    <div class="headerLogo"><a href="#mainv"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="ロゴ画像" class="js_ofi"></a></div>
    <nav class="gNav">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'global',
                    'container' => false,
                )
            );
        ?>
    </nav>
</div></header>

<span class="right WrapBd"><span class="Vw">MARIE MORIMOTO</span></span>
<span class="btm WrapBd"></span>
