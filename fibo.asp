<%
	nn = 8
	num = 0
	Response.write "<table border = 1>"
	for i=1 to nn
		Response.write "<tr>"
		for j = 1 to i
			num = num + 1
			Response.write "<td>"&num&"</td>"
		next
		Response.write "</tr>"
	next
	Response.write "</table>"

	num = 0
	Response.write "<table border = 1>"
	for i=nn to 0 step -1
		Response.write "<tr>"
		for j = 1 to i
			num = num + 1
			Response.write "<td>"&num&"</td>"
		next
		Response.write "</tr>"
	next
	Response.write "</table>"
	
	num = 0
	Response.write "<table border = 1>"
	for i=0 to nn
		Response.write "<tr>"
		for j = 1 to i
			num = num + 1
			Response.write "<td>"&num&"</td>"
		next
		Response.write "</tr>"
	next
	for i=nn to 1 step -1
		Response.write "<tr>"
		for j = 2 to i
			num = num + 1
			Response.write "<td>"&num&"</td>"
		next
		Response.write "</tr>"
	next
	Response.write "</table>"
	
	num = 0
	Response.write "<table border = 1>"
	for i=1 to nn
		Response.write "<tr>"
		for j = 1 to nn
			start = nn-i
			if start < j then
				num = num + 1
				Response.write "<td>"&num&"</td>"
			else
				Response.write "<td> </td>"
			end if
		next
		Response.write "</tr>"
	next
	Response.write "</table>"

%> 