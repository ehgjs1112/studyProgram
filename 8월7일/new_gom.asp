<html>
<head>
<meta charset="utf-8">
<trtle> 곱하기를 해봅시다 </br></trtle>
</head>
<body>
	<%
		for i=0 to 2
			for j=1 to 9 
					k = i * 3 + 1
					k1 = i * 3 + 2
					k2 = i * 3 + 3
					sum = k * j
					sum1 = k1 * j	
					sum2 = k2 * j						
					
					Response.Write k&"X"&j&"="&sum&"  "
					Response.Write k1&"X"&j&"="&sum1&"  "
					Response.Write k2&"X"&j&"="&sum2&"  "
					Response.Write "<br/>"
			next
			Response.Write "-------------------------------</br>"
		next
	%>
</body>
</html>