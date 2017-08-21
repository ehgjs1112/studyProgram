<%
	Set dbConn = Server.CreateObject("ADODB.Connection")
	dbConn.Open "Driver={MySQL ODBC 3.51 driver}; Server=localhost; Database=time_stamp; Uid=sa; Pwd=isdu804m;"

if dbConn.errors.count = 0 then 
		'Response.Write "MySQL 접속 성공!" 
		sql = "INSERT INTO time_stamp (times) values ('" & NOW & "')"
		dbConn.Execute sql
		Response.redirect "svrtime.asp"
	else
		Response.Write "MySQL 접속 실패!"
end if 
%>  
