<?php
    $postData = $_POST;
    $page_flg = 0;
    $error = array();
    
    pageBack($postData);//戻れる準備をする
    formValidation($postData);//バリデーションチェック
    
    //Validation
    function formValidation($postData){
        $check = '/(^[ぁ-んァ-ヶー一-龠]+$)|(^[a-zA-Z0-9]+$)/u';
        unset($_SESSION['sErrorName']);
        unset($_SESSION['sErrorNameFW']);
        unset($_SESSION['sErrorEmail']);

        if (!($postData['name'])) {
            $_SESSION['sErrorName'] = "お名前を入力してください";
            header( "location: ../index.php#contact");//ページ繊維をさせるパスに※注意：validation.phpを呼び出してるところからのパスになる。
        } else if (!preg_match($check,$postData['name'])) {
            $_SESSION['sErrorNameFW'] = "お名前は全角または英数字で入力してください";
            header( "location: ../index.php#contact");
        }
        if (!($postData['email'])) {
            $_SESSION['sErrorEmail'] = "メールアドレスを入力してください。"; 
            header( "location: ../index.php#contact");
        } else {
            if(!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/u',$postData['email'])){
                $_SESSION['sErrorNotEmail'] = "メールアドレスを正しく入力してください。";
                header( "location: ../index.php#contact");
            }
        }
    }

    function pageBack($postData){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['message'] = $_POST['message'];
    }