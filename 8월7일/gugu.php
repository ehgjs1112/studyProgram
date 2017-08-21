<html>
	<head>
	<title> 구구단선택기 </title>
	</head>
		<body>
			<table style = "border: 0px;">
			<tr style = "background: #cccccc;">
				<td style = "width: 150px; text-align : center;">단수를 입력해주세요</td>
				<td style = "width: 50px; text-align : center;">버튼</td>
			</tr>
			<tr>
				<td><input tpe = "text" name = "times" size = "1" maxlength = "1"/></td>
				<td colspan = "1" style = "text-align: center;"><input type = "submit" value="확인"/></td>
			</tr>
			<form id="form1" action="view.jsp">
				<input type="text" name="myname" />
				<input type="button" value="그냥 버튼"/>
				<input type="submit" value="서브밋 버튼" />
				<button onclick="alert('111');">1번 버튼</button>
				<button onclick="alert('222'); return false;">2번 버튼</button>
			</form>
			<?php
				if(){
					$time = $_POST['times'];
					echo $time;
				}
			?>
		</body>
</html>