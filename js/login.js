document.login_form.id.focus();

function check_input(){
  if(!document.login_form.id.value){
    alert("아이디를 입력하세요.");
    document.login_form.id.focus();
    return;
  }
  if(!document.login_form.pass.value){
    alert("비밀번호를 입력하세요.");
    document.login_form.pass.focus();
    return;
  }
  document.login_form.submit();
}

var passInput = document.querySelector("input[name='pass']");
passInput.addEventListener("keydown", function(evt){
  if(evt.keyCode == 13){
    check_input();
  }
}); 

