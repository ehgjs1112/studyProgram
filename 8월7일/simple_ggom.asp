<html>
<head>
<meta charset="utf-8">
<title> 곱하기를 해봅시다 </title>
</head>
<body>
	<%
	
		for i = 1 to 9 step 1
			Response.Write i & "단입니다." & "<br/>"
			for j = 1 to 9 step 1
				sum = i * j
				Response.Write i&"X"&j&"="&sum&"<br/>"
			next
		next
	%>
</body>
</html>