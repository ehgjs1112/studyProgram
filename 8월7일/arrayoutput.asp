<%
	Dim ggom(9,9)
	for r = 1 to 9 step 1
		for j = 1 to 9 step 1
			sum = r * j
			result = r&"x"& j&"="&sum
			ggom(r, j) = result
		next	
	next
%>
<%
		timess = request("timess")
		for j = 0 to 9 step 1
			Response.Write ggom(timess,j)&"<br/>"
		next
%>
<html>
	<head>
	<meta charset="utf-8">
	<title> 곱하기를 해봅시다 </title>
	</head>

	<body>
		<form action = "arrayoutput.asp" method = "post">
			<tr>
				<td><input type = "text" name = "timess" size = "1" maxlength = "1"/>  PHP 확인</td>
				<td colspan = "1" style = "text-align: center;"><input type = "submit" value="확인"/></td>
			</tr>
		</form>
		
	</body>
</html>