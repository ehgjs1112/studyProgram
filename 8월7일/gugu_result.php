<html>
	<head>
	<title> 구구단 결과</title>
	</head>
		<body>
			<?php
				$times = $_POST['timesPHP'];
				$sum = 0;
				echo $times."단입니다."."<br/>";
				for($j = 1; $j<10; $j++){
					$sum = $times * $j;
					//echo $i."X".$j."=".$sum."<br/>";
					echo "$times x $j = $sum";
					echo "<br/>";
				}
			?>
		</body>
</html>