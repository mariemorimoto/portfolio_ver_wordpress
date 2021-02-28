<?php
    session_start();
    require_once("./validation.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="MaireMorimoto-Portfolio-">
<meta name="description" content="森本真理恵のポートフォリオサイトです。ここでは、作成したロゴや名刺をご紹介いたします。イラストの作成ご依頼等はメールよりご連絡を願いいたします。">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../img/common/icon/favicon.ico" >
<link rel="apple-touch-icon-precomposed" href="../img/common/icon/apple-touch-icon-precomposed.png">
<title>MaireMorimoto-Portfolio-</title>
<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--[if IE]>
<script src="../js/html5.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->
<!--プラグイン-->
<script src="../js/ofi.min.js"></script>
<script src="../js/jquery.matchHeight-min.js"></script>
<script src="../js/bigger_link.min.js"></script>
<script src="../js/jquery.scrollify.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/animate.css">
<script src="../js/wow.min.js"></script>
<!--独自JS,CSS-->
<script src="../js/common.js"></script>
<script src="../js/plugin.js"></script>
<link href="../css/common.css" rel="stylesheet">
<link href="../css/page.css" rel="stylesheet">
<link href="../css/home.css" rel="stylesheet">
<script>
    var element = document.getElementById('contact'); // 移動させたい位置の要素を取得
    // var rect = element.getBoundingClientRect();
    // var position = rect.top;    // 一番上からの位置を取得

    setTimeout( function() {
        var cotact = document.getElementById('contact-button');
        cotact.click();
    }
    , 5000);
</script>
</head>
<body id="body">

<h1>MaireMorimoto-Portfolio-</h1>

<div class="wrap">
    <!--border-->
    <header id="header" class="top"><div class="headerIn ontainer">
        <div class="headerLogo"><a href="../"><img src="../img/common/logo.png" alt="" class="js_ofi"></a></div>
        <nav class="gNav"><ul>
            <li><a href="#intro">INTRO</a></li>
            <li><a href="#opus">OPUS</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li id="contact-button"><a href="#contact">CONTACT</a></li>
        </ul></nav>
    </div></header>
    <span class="right WrapBd"><span class="Vw">MARIE MORIMOTO</span></span>
    <span class="btm WrapBd"></span>
    <div class="left WrapBd"><span class="Vw">&copy;2019 MarieMorimoto</span></div>

    <div class="main">

    <!--mainv-->
    <section id="mainv" class="section sectionImg js-section" data-section-name="mainv">
        <h2 id="typing">PORTFOLIO</h2>
        <div class="box">
            <div class="arrowWrap">
            <div class="arrowInner">
                <p>SCROLL DOWN</p>
                <div class="arrow"></div>
            </div>
            </div>
        </div>    
    </section>
    <!--/#mainv-->
        
    <!--intro-->
    <section id="intro" class="section js-section" data-section-name="intro">
        <div class="mainCont container in970 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2 class="comTtl"><span class="num">001</span>INTRO<small>type:Coder</small></h2>
            <div class="opusCont">
                <div id="aboutCont" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <div class="txtBox">
                        <h3 class="ttl">Greeting</h3>
                        <div class="read">
                            初めまして。<br>
                            この度、ポートフォリオをみてくださり、<br class="hidden-xs hidden-sm">本当にありがとうございます。<br>
                            <br>
                            この中には、職業訓練時代の作品やデザイン、<br class="hidden-xs hidden-sm">学んだモノをできる限り詰め込んでおります。<br>
                            最後までご覧頂けましたら大変嬉しく思います。<br>
                            現在、ひよっこフロントエンジニアです。福井のWeb制作会社に就職。<br>
                            フロントエンジニアを目指して奮闘中。。。<br>
                            勉強中の言語もありますが、負けず嫌いの性格を活かして頑張ります！！                    
                        </div>
                    </div>
                    <div class="txtBox">
                        <h3 class="ttl">SKILL</h3>
                        <div class="read">
                            <p class="brackets">language</p>
                            <p class="txt">HTML,CSS,JS,JQuery,JavaScript<br>Vue.js,PHP,WordPress etc...</p>
                        </div>
                        <div class="read">
                            <p class="brackets">tool</p>
                            <p class="txt">Sass,souceTree,Git,MAMP,VSCode,<br>PhotoShop,Illustrator,XD etc...</p>
                        </div>
                    </div>
                </div>
                <!--/#aboutCont-->   
            </div>
            <!--/#opusCont-->   
        </div>
        <!--/.mainCont-->
    </section>
    <!--/#intro-->

    <!--opus-->
    <section id="opus" class="section js-section" data-section-name="opus">
        <div class="opusSec section-content">
            <div class="txtCont container in970">
                <h2 class="comTtl"><span class="num">002</span>OPUS<small>type:Gallery</small></h2>
                <div class="opusCont">
                    <h3 class="ttl">To See</h3>
                    <div class="txtBox">
                        <div class="read">
                            <p class="brackets">to See</p>
                            <p class="txt">ここでは、この中には、職業訓練時代のデザイン作品、Web制作の事例をご覧いらだけます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="opusList container in970">
                <ul class="row">
                    <li class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp js_matchHeight" data-wow-duration="1s"><a href="" target="_blank">
                        <div class="image"><img src="../img/dummy/no_image.png" alt="noImage" class="js_ofi"></div>
                    </a></li>
                    <li class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp js_matchHeight" data-wow-duration="1.5s"><a href="" target="_blank">
                        <div class="image"><img src="../img/dummy/no_image.png" alt="noImage" class="js_ofi"></div>
                    </a></li>
                    <li class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp js_matchHeight" data-wow-duration="2s"><a href="" target="_blank">
                        <div class="image"><img src="../img/dummy/no_image.png" alt="noImage" class="js_ofi"></div>
                    </a></li>
                    <li class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp js_matchHeight" data-wow-duration="2.5s"><a href="" target="_blank">
                        <div class="image"><img src="../img/dummy/no_image.png" alt="noImage" class="js_ofi"></div>
                    </a></li>
                    <li class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp js_matchHeight" data-wow-duration="3s"><a href="" target="_blank">
                        <div class="image"><img src="../img/dummy/no_image.png" alt="noImage" class="js_ofi"></div>
                    </a></li>
                    <li class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp js_matchHeight" data-wow-duration="3.5s"><a href="" target="_blank">
                        <div class="image"><img src="../img/dummy/no_image.png" alt="noImage" class="js_ofi"></div>
                    </a></li>
                </ul>
            </div>    
        </div>
    </section>
    <!--/#opus-->

    <!--blog-->
    <section id="blog" class="section js-section" data-section-name="blog">
        <div class="mainCont container in970 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2 class="comTtl"><span class="num">003</span>BLOG<small>type:Blog</small></h2>
            <div class="opusCont">
                <div class="aboutCont" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <article class="txtBox">
                        <h3 class="ttl">ホームページを公開しました。</h3>
                        <div class="read">
                            <p class="brackets">new!!</p><time class="dateTime">2019.7.3</time>
                            <a href="../news/entry.html" class="txt">ホームページを公開しました。</a>
                        </div>
                    </article>
                </div>
                <!--/#aboutCont-->
                <div class="aboutCont" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <article class="txtBox">
                        <h3 class="ttl">ホームページを公開しました。</h3>
                        <div class="read">
                            <p class="brackets">new!!</p>
                            <a href="../news/entry.html" class="txt">ホームページを公開しました。</a>
                        </div>
                    </article>
                </div>
                <!--/#aboutCont-->
            </div>
            <!--/#opusCont-->   
        </div>
        <!--/.mainCont-->
    </section>
    <!--/#blog-->

    <!--#contact-->
    <section id="contact" class="section js-section" data-section-name="contact">
        <div class="mainCont container in970 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="contactTtlCont">
                <h2 class="comTtl"><span class="num">005</span>CONTACT<small>type:Contact</small></h2>
                <div class="txtCont">
                    <h3 class="ttl">To See</h3>
                    <div class="txtBox">
                        <div class="read">
                            <p class="brackets">Contact Me</p>
                            <p class="txt">お気軽にご質問等ご連絡いただけたらと思います。<br>
                            <span class="required top">*</span>は必須入力です。入力をお願いいたします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="./finish.php#contact" id="mailForm" class="confirm" method="post">
                <div class="formCont">
                <dl class="formRow">
                        <dt class="formTtl">Name</dt>
                        <dt class="formTxt"><?php echo htmlspecialchars($_POST["name"]); ?></dt>
                    </dl>
                    <dl class="formRow">
                        <dt class="formTtl">Adress</dt>
                        <dt class="formTxt"><?php echo htmlspecialchars($_POST["email"]); ?></dt>
                    </dl>
                    <dl class="formRow">
                        <dt class="formTtl">message</dt>
                        <dt class="formTxt"><?php echo htmlspecialchars($_POST["message"]); ?></dt>
                    </dl>
                </div>
                <div class="trapdoor send hiddden-xs">
                    <div class="top door"></div>
                    <div class="bottom door"></div>
                    <input type="submit" value="送信" class="btnForm button">
                </div>
                <div class="trapdoor visible-xs">
                    <input type="submit" value="確認画面へ" class="btnForm button">
                </div>

                <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name"/>
                <input type="hidden" value="<?php echo $_POST['email']; ?>" name="email"/>
                <input type="hidden" value="<?php echo $_POST['message']; ?>" name="message"/>
            </form>
            <!--戻るボタン-->
            <div class="trapdoor back">
                <div class="top door"></div>
                <div class="bottom door"></div>
                <input type="submit" value="戻る" onclick=history.back() class="btnForm button">
            </div>
        </div>
    </section>
    <!--/#contact-->

    <!--pageTop-->
    <p id="pageTop"><a href="#body">PAGE<br>TOP</a></p>
    <p id="twitter"><a href="https://twitter.com/MarieMorimoto" target="_blank"></a></p>
    <!--peger-->
    <ul class="pager" id="js-pager"></ul>

    </div>
</div>

</body>
</html>