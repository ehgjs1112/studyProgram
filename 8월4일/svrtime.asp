<head>
<meta charset="utf-8">
<title> 서버시각 표시 </title>
</head>
 
<body onload="startTime()">
<div id="clock"></div>
<br>
	<button type="button" onclick="location.href='insertdata.asp' "> 저 장 <br/></button>
<br>
<% 
		Set dbConn = Server.CreateObject("ADODB.Connection")
		dbConn.Open "Driver={MySQL ODBC 3.51 driver}; Server=localhost; Database=time_stamp; Uid=sa; Pwd=isdu804m;"
		
		Set Rs = Server.CreateObject("ADODB.Recordset")
		
		sql = "select times from time_stamp order by id desc limit 1"
		Set Rs = dbConn.Execute(sql)
		Response.Write "<br/>" & Rs("times") & "</th>"
%>  
	
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i}; // 숫자가 10보다 작을 경우 앞에 0을 붙여줌
    return i;
}
</script>

</body>
</html>