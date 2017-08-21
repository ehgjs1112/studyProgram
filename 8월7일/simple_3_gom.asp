<html>
<head>
<meta charset="utf-8">
<trtle> 곱하기를 해봅시다 </br></trtle>
</head>
<body>
	<%
		for i=1 to 9 step 3
			for j=1 to 9 step 1
				for k = i  to i+2 step 1
					sum = k * j			
					Response.Write k&"X"&j&"="&sum&"  "
				next
				Response.Write "<br/>"
			next
			Response.Write "-------------------------------</br>"
		next
	%>
</body>
</html>