//$('#box').text('Hello jQuery!');

//「確認画面へ」をクリック
document.getElementById('confirm-btn').onclick=function(){
    var tgt1 = document.getElementById('contactFormName').value;
    var tgt2 = document.getElementById('contactFormEmail').value;
    var tgt3 = document.getElementById('contactFormMessage').value;
    var errmsg = "";

    if(tgt1==""){
        errmsg="お名前を入力してください。\n";
    }
    
    if (!tgt2.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
        errmsg=errmsg+'メールアドレスを正しく入力してください。\n';
    }
    
    if(tgt3==""){
        errmsg=errmsg+"お問い合わせ内容を入力してください。";
    }

    if(errmsg!=""){
        alert(errmsg);
    }else{
        $("#login-modal").fadeIn();
        document.getElementById('boxName').textContent=tgt1;    
        document.getElementById('boxEmail').textContent=tgt2;    
        document.getElementById('boxMessage').textContent=tgt3;    
        
        return false;
    }
     
}

//×ボタンをクリックで、モーダルを閉じる。（注）classnameの場合はインデックス番号必要
document.getElementsByClassName("close-modal")[0].onclick=function(){
    $("#login-modal").fadeOut();
    return false;
};

//「前の画面に戻る」をクリックで、モーダルを閉じる。
document.getElementById('modify-btn').onclick=function(){
    $("#login-modal").fadeOut();
    return false;
};

//「送信」ボタンをクリックで、GASでメール送信
document.getElementById('submit-btn').onclick=function(){
    document.lastcheck.action = "https://script.google.com/macros/s/AKfycbz-IoIrq20DjaI2VGw5eI46-xEACx9BCCOKU_9GyDUVKBIkkso/exec";
    document.lastcheck.submit();
    return false;
};




  