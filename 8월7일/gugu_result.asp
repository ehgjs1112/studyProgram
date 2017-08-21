<html>
	<head>
	<meta charset="utf-8">
	<title> 구구단 결과</title>
	</head>
		<body>
			<%
				i = request("timesASP")
				if i>0 then
					Response.Write i & "단입니다." & "<br/>"
					for j = 1 to 9 step 1
						sum = i * j
						Response.Write i&"X"&j&"="&sum&"<br/>"
					next
				else
					Response.Write "값을 입력해주세여"&"<br/>"
				END IF
			%>
		</body>
</html>