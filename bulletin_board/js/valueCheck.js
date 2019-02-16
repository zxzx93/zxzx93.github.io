$(document).ready(function(){

	var joinUp = $('#joinUp');
	var userName = $('#ID');
	var userPw = $('#PW');
	var valueError = $('#valueError');

	joinUp.click(function(){

		if(userName.val() == ''){
      valueError.text('이름을 입력하세요.');
      userName.focus();
      timeOutCall();
      return false;
    }


    if(userPw.val().length >= 8){
    	console.log('the value of password is good');
    }else{
    	valueError.text('비밀번호를 8자 이상 입력하세요.');
    	userPw.focus();
    	timeOutCall();
    	return false;
    }


    function timeOutCall(){
      //setTimoeout 함수는 어떠한 기능의 시간을
      //지연시킬 때 사용하는 내장 함수
      setTimeout(function(){
      	$('#valueError').text('');
      },3000)
    }


  })
})