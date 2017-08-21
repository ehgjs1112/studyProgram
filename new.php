<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0026)http://localhost/test.html -->
<html lang="ko"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
 
<title> </title>
<script language="javascript">
 var count = 1;
 var addCount;
 
//행추가
function addInputBox() {
	for(var i=1; i<=count; i++) {
	if(!document.getElementsByName("test"+i)[0]) {
		addCount = i;
		break;
	}
	else addCount = count;
 }
 var addStr = "<tr><td><input type=checkbox name=checkList value="+addCount+"></td><td><input type= text size=10 ></td><td><input type= text size=10 ></td><td><input type= text size=10 ></td></tr>";
 var table = document.getElementById("dynamic_table");
 var newRow = table.insertRow();
 var newCell = newRow.insertCell();
 newCell.innerHTML = addStr;
 count++;
}
 
//행삭제
function subtractInputBox() {
 var table = document.getElementById("dynamic_table");
 //var max = document.gForm.checkList.length;
 //alert(max);
 var rows = dynamic_table.rows.length;
 var chk = 0;
 if(rows > 1){
  for (var i=0; i<document.gForm.checkList.length; i++) {
   if (document.gForm.checkList[i].checked == true) {
    table.deleteRow(i);
    i--;
    count--;
    chk++;
   }
  }
  if(chk <= 0){
   alert("삭제할 행을 체크해 주세요.");
  }
   }else{
    alert("더이상 삭제할 수 없습니다.");
   }
}
 
function submitbutton() {
// gForm.count.value = count;
 var gform = document.gForm;
 gform.count.value = count;
 alert(count);
 gForm.submit();
 return;
}
</script></head>


	<body -nload="addInputBox()">
		<input type="button" value="추가" onclick="javascript:addInputBox();"> 
		<input type="button" value="삭제" onclick="javascript:subtractInputBox();">
		<input type="button" value="전송" onclick="javascript:submitbutton();">
		<form name="gForm" action="http://localhost/alert.jsp" method="get">
			<input type="hidden" name="count">
			<table id="" border="1" width = "190">
				<tbody>
					<tr>
						<td width="30"></th>
						<td width="30">학번</td>
						<td width="30">이름</td>
						<td width="20">언어</td>
						<td width="20">영어</td>
						<td width="20">과학</td>
						<td width="20">사회</td>
						<td width="20">학급</td>
					</tr>
				</tbody>
			</table>
				<table width = "190" id="dynamic_table" border="1">
					<tr>
						<td width = "30"><input type=checkbox name=checkList  value="+addCount+"></td>
						<td width = "30"><input type = "text" name = "number" maxlength = "10"/></td>
						<td width = "30"><input type = "text" name = "h_name" maxlength = "10"/></td>
						<td width = "20"><input type = "text" name = "leng" maxlength = "10"/></td>
						<td width = "20"><input type = "text" name = "eng" maxlength = "10"/></td>
						<td width = "20"><input type = "text" name = "sci" maxlength = "10"/></td>
						<td width = "20"><input type = "text" name = "soci" maxlength = "10"/></td>						
						<td width = "20">
							<select name "class_name" size = "1">
								<option value = "A">A반</option>
								<option value = "B">B반</option>
								<option value = "C">C반</option>
								<option value = "D">D반</option>
								<option value = "E">E반</option>
								<option value = "F">F반</option>
								<option value = "G">G반</option>
							</select>
						</td>
					</tr>
				</table>			
		</form>
	</body>
</html>