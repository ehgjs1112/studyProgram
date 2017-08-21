<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<HTML>
	<HEAD><TITLE>Anyoung Pussy cat 워우워워</TITLE></HEAD>
	<BODY>
		<CENTER>
				<%Dim strNumber
				strNumber = "1"%>
				<% IF Hour(Now)<12THEN%>
				지금은 오전 입니다.<BR>
				<%ELSE%>
				지금은 오후 입니다.<BR>
				<%END IF%>
				<%for i = 1 to 3 step 1%>
					워우워워ASP<BR>
				<%NEXT%>
				<%SELECT CASE (strNumber)
					CASE "1"
						Response.write "1입니다"
					CASE "2"
						Response.write "2입니다. & "<br>""
					CASE "3"
						Response.write "3입니다. & "<br>""
					CASE "4"
						Response.write "4입니다. & "<br>""
					CASE ELSE
						Response.write "55555입니다. & "<br>""
				END SELECT%>
		</CENTER>
	</BODY>	
</HTML>