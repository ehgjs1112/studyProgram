<%@Language="VBScript" CODEPAGE="65001"%>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<% 
Dim dbConn    ' Connection 객체 선언
Dim rcdst          ' Record Set 객체 선언

Set dbConn = Server.CreateObject("ADODB.Connection")
dbConn.Open "Driver={MySQL ODBC 3.51 driver}; Server=localhost; Database=time_stamp; Uid=sa; Pwd=isdu804m;"

if dbConn.errors.count = 0 then 
    Response.Write "MySQL 접속 성공!" 
else

    Response.Write "MySQL 접속 실패!"
end if 
%>  
