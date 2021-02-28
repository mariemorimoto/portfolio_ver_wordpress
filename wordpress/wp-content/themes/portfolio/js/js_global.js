//プラグイン関連
function PluginRead() {
    objectFitImages('.js_ofi');
    new WOW().init();
    $('.js_matchHeight').matchHeight();
}

//スムーススクロール
$(function(){   
    PluginRead();   //プラグイン関連の実行

    //スムーススクロール
    var headerH = $("#header").height();

    $('a[href^="#"]').on('click',function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - headerH;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });    

    $(window).on('resize',function(){		
        headerH = $("#header").height();
    });
        
    //ページトップへ戻る
	var topBtn = $('#pageTop');  
    
    topBtn.hide();  //一旦非表示
	
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
	});
});
