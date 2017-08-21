<html>
<head>
<meta charset="utf-8">
<trtle> 곱하기를 해봅시다 </br></trtle>
</head>
<body>
	<%
		a = 1
		back = 0
		for b=1 to 9
			for count=1 to 3 
					result = a * b  
					Response.Write a&" X "&b&" = "&result&" "
					if a mod 3 = 0 then
						back = a
						Response.Write "<br/>"
					end if
					a= a+1
			next
			a = back - 2 
			if b = 9 then
				b = 0
				a = back+1
				Response.Write "-------------------------------</br>"
			end if
			if back > 9 or a > 9 then
				response.end
			end if		
		next
	%>
</body>
</html>