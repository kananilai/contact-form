//苗字チェック
document.addEventListener('DOMContentLoaded',function(){
    var check_inputs = document.getElementsByClassName('last_name');
    for(var i=0; i<check_inputs.length; i++){
        check_inputs[i].oninput = function(){
            var alertarea = this.parentNode.getElementsByClassName('alertarea');
            if(this.value.trim().length < 1){
                if(alertarea[0]){alertarea[0].innerHTML="苗字を入力してください。"}
            }else {
                if(alertarea[0]){alertarea[0].innerHTML="";}
            }
        }
    }
});

//名前チェック
document.addEventListener('DOMContentLoaded',function(){
    var check_inputs = document.getElementsByClassName('first_name');
    for(var i=0; i<check_inputs.length; i++){
        check_inputs[i].oninput = function(){
            var alertarea = this.parentNode.getElementsByClassName('alertarea');
            if(this.value.trim().length < 1){
                if(alertarea[0]){alertarea[0].innerHTML="名前を入力してください。"}
            }else {
                if(alertarea[0]){alertarea[0].innerHTML="";}
            }
        }
    }
});
//メールアドレスチェック
document.addEventListener('DOMContentLoaded',function(){
    var check_inputs = document.getElementsByClassName('email');
    for(var i=0; i<check_inputs.length;i++){
        check_inputs[i].oninput=function(){
            var alertarea = this.parentNode.getElementsByClassName('alertarea');
            var correctCheck = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
            if ((this.value != '')&&(!this.value.match(correctCheck))) {
                if(alertarea[0]){alertarea[0].innerHTML="メールアドレスを入力してください。"}
            }else{
                if(alertarea[0]){alertarea[0].innerHTML="";}
            }
        }
    }
});
//郵便番号
document.addEventListener('DOMContentLoaded', function() {
    var targets = document.getElementsByClassName('post-code');
    // console.log(targets.item(0).value);
    for (var i=0 ; i<targets.length ; i++) {
        targets[i].oninput = function () {
        var alertelement = this.parentNode.getElementsByClassName('alertarea');
        //全角→半角変換
        function replaceFullToHalf(str){
            return str.replace(/[！-～]/g, function(s){
                return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
            });
        }
        var post_code = document.getElementById('post_code');
        console.log(post_code.value);
        post_code.value = replaceFullToHalf(post_code.value);
        //エラー条件分岐
        if( ( this.value != '') && (!this.value.match( /^\d{3}\-?\d{4}$/ ))) {
            if( alertelement[0] ) { alertelement[0].innerHTML = '郵便番号を正く入力してください。'; }
            this.style.border = "2px solid red";
        } else {
            if( alertelement[0] ) { alertelement[0].innerHTML = ""; }
            this.style.border = "1px solid black";
        }

        }
    }
});



//住所
document.addEventListener('DOMContentLoaded',function(){
    var check_inputs = document.getElementsByClassName('address');
    for(var i=0; i<check_inputs.length; i++){
        check_inputs[i].oninput = function(){
            var alertarea = this.parentNode.getElementsByClassName('alertarea');
            if(this.value.trim().length < 1){
                if(alertarea[0]){alertarea[0].innerHTML="住所を入力してください。"}
            }else {
                if(alertarea[0]){alertarea[0].innerHTML="";}
            }
        }
    }
});

//意見
document.addEventListener('DOMContentLoaded',function(){
    var check_inputs = document.getElementsByClassName('content');
    for(var i=0; i<check_inputs.length; i++){
        check_inputs[i].oninput = function(){
            var alertarea = this.parentNode.getElementsByClassName('alertarea');
            if(this.value.trim().length < 1){
                if(alertarea[0]){alertarea[0].innerHTML="ご意見を入力してください。"}
            }else {
                if(alertarea[0]){alertarea[0].innerHTML="";}
            }
        }
    }
});

