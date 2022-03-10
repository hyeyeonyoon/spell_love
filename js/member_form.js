function check_input(){
    if(!document.member_form.id.value){
        alert("아이디를 입력하세요.");
        document.member_form.id.focus();
        return;
    }
    if(!document.member_form.pass.value){
        alert("비밀번호를 입력하세요.");
        document.member_form.pass.focus();
        return;
    }
    if(!document.member_form.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요.");
        document.member_form.pass_confirm.focus();
        return;
    }
    if(!document.member_form.name.value){
        alert("이름을 입력하세요.");
        document.member_form.name.focus();
        return;
    }
    if(!document.member_form.phone1.value){
        alert("전화번호를 입력하세요.");
        document.member_form.phone1.focus();
        return;
    }
    if(!document.member_form.phone2.value){
        alert("전화번호를 입력하세요.");
        document.member_form.phone2.focus();
        return;
    }
    if(!document.member_form.phone3.value){
        alert("전화번호를 입력하세요.");
        document.member_form.phone3.focus();
        return;
    }
    if(!document.member_form.email1.value){
        alert("이메일을 입력하세요.");
        document.member_form.email1.focus();
        return;
    }
    if(!document.member_form.email2.value){
        alert("이메일을 입력하세요.");
        document.member_form.email2.focus();
        return;
    }


    // 비밀번호, 비밀번호 확인 일치 유무
    if(document.member_form.pass.value != document.member_form.pass_confirm.value){
        alert("비밀번호가 일치하지 않습니다.");
        document.member_form.pass.value = "";
        document.member_form.pass_confirm.value = "";
        document.member_form.pass.focus();
        return;
    }

    document.member_form.submit();
}


function reset_form(){
    document.member_form.id.value = "";
    document.member_form.pass.value = "";
    document.member_form.pass_confirm.value = "";
    document.member_form.name.value = "";
    document.member_form.phone1.value = "";
    document.member_form.phone2.value = "";
    document.member_form.phone3.value = "";
    document.member_form.email1.value = "";
    document.member_form.email2.value = "";

    document.member_form.id.focus();
}


function check_id(){
    if(!document.member_form.id.value){
        alert("아이디를 입력하세하세요.");
        document.member_form.id.focus();
        return;
    }
    window.open("./member_check_id.php?id=" + document.member_form.id.value, "checkID", "width=400, height=300");
}


function reset_form_modify(){
    
}