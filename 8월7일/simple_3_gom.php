<html>
<head>
<trtle> 곱하기를 해봅시다 </br></trtle>
</head>
<body>
	<?php
		for($i=1 ; $i < 9 ; $i += 3)
		{
			for($j=1 ; $j <= 9 ; $j++)
			{
				for($k=$i ; $k <= $i+2 ; $k++){
					$sum = $k * $j;
					echo "$k x $j = $sum"."\t";					
				}
				echo "<br/>";
			}
			echo "---------------------------------"."<br/>";
		}
	?>
</body>
</html>