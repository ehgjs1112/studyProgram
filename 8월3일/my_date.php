<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>오늘의 시간은?</TITLE>
	</HEAD>
	<BODY>
		<?php
				$year = date('y');
				$month = date('n');
				$day = date('d');
				$hour = date('h');
				$min = date('i');
				$second = date('s');
				
				$out_str = "오늘은 ".$year."년 ".$month."월 ".$day."일".'\n'.
					"현재 시각은 ".$hour.":".$min.":".$second."입니다.".'\n';
				echo $out_str;
		?>
	</BODY>
</HTML>