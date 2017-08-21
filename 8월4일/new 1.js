<%@ page language="java" contentType="text/html; charset=EUC-KR"
 pageEncoding="EUC-KR" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<title>회원가입</title>
<script language="JavaScript">


function idcheck()
{
	var ff = document.form1;
	if(!ff.id.value){
	alert("아이디를 입력하세요!!");
	ff.id.focus();
	}
	//url과 사용자 입력 아이디를 조합합니다.
 //url = "id_check.jsp?id=" + ff.id.value;

 //새로운 윈도우를 엽니다.
	//window.open(url, "confirm",
	//"toolbar = no, location = no, status = no," +
	//"menubar = no, scrollbars = no, resizable = no," +
	//"width = 300, height = 200");

}

function sendit()
{
	var ff = document.form1;
 //아이디
 if(ff.id.value == "") {
 alert("아이디를 입력해 주십시오.");
 ff.id.focus();
	}
	//아이디 중복확인 메시지
	else if(!ff.idcheck.value){
	alert("ID 중복확인 하세요!!");
	form1.id.focus();
	return false;
	}
 //비밀번호
 else if(ff.pw.value == "") {
 alert("비밀번호를 입력해 주십시오.");
 ff.pw.focus();
	}
	//비밀번호 중복확인 메시지
	else if(!ff.idcheck.value){
	alert("PW 중복확인 하세요!!");
	form1.pw.focus();
	return false;
	}
 //이름
 else if(ff.name.value == "" ) {
 alert("이름을 입력해 주십시오.");
 ff.name.focus();
 }
 //별명
 else if(ff.nickname.value == "" ) {
 alert("별명을 입력해 주십시오.");
 ff.nickname.focus();
 }
 //닉네임 중복확인 메시지
 else if(!ff.idcheck.value){
	alert("닉네임 중복확인 하세요!!");
	form1.nickname.focus();
	return false;
	}
 //이메일
 else if(ff.email.value == "" ) {
 alert("이메일을 입력해 주십시오.");
 ff.email.focus();
 }
 //전화번호
 else if(ff.phone.value == "" ) {
 alert("전화번호를 입력해 주십시오.");
 ff.phone.focus();
 }
 else {
 ff.action = 'join_ok.jsp';
	ff.submit();
	}
}
</script>

</head>

<body>
<center>
<h2>회원가입</h2>
<br>
<br>
<form name=form1 method=post action="join_ok.jsp">
	<table border=1 cellspactin=0 cellpadding=5>
	<tr>
	<td>아이디</td>
	<td align=left>
	<input type=text name=id size=10 maxlength=12>
	<input type="button" onclick="idcheck()" value="id 중복확인">
	<input type="hidden" name="idcheck">(10자리 이내)
	</td>
	</tr>
	<tr>
	<td>비밀번호</td>
	<td align=left>
	<input type=text name=pw size=10 maxlength=10>
	<input type="button" value="pw 중복확인">
	<input type="hidden" name="pwcheck">
	<br>(10자리 이내)
	</td>
	</tr>
	<tr>
	<td>이름</td>
	<td align=left><input type=text name=name size=10></td>
	</tr>
	<tr>
	<td>별명</td>
	<td align=left>
	<input type=text name=nickname size=10>
	<input type="button" value="닉네임 중복확인">
	<input type="hidden" name="nncheck">
	</td>
	</tr>
	<tr>
	<td>이메일</td>
	<td align=left><input type=text name=email size=50></td>
	</tr>
	<tr>
	<td>전화번호</td>
	<td align=left><input type=text name=phone size=13></td>
	</tr>
	<tr>
	<td colspan=2 align=center>
	<input type=reset value="다시입력">
	<input type=button onclick="sendit()" value="가입하기">
	</td>
	</tr>
	</table>
</form>
</center>
</body>
</html>