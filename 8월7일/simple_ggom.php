<html>
<head>
<trtle> 곱하기를 해봅시다 <br/></trtle>
</head>
<body>
	<?php
		$sum = 0;
		for($r = 1; $r<10; $r++){
			echo $r."단입니다."."<br/>";
			for($j = 1; $j<10; $j++){
				$sum = $r * $j;
				//echo $r."X".$j."=".$sum."<br/>";
				echo "$r x $j = $sum";
			}

		}
	?>
</body>
</html>