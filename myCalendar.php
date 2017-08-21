<html>
<head> 
<title>php 달력</title>
</head>
<body>
 <?
   $year =  date( "Y" ); 
   $month = date( "m" );
   
   
   // 이전, 다음 만들기   
   $PrevYear    = $_GET['PrevYear'];
   $prevMonth = $_GET['prevMonth'];
   $nextMonth = $_GET['nextMonth'];
   $nextYear    = $_GET['nextYear'] ;
   
   $prevYbtn  = $_GET['prevYbtn'];
   $prevMbtn = $_GET['prevMbtn'];
   $nextMbtn = $_GET['nextMbtn'];
   $nextYbtn  = $_GET['nextYbtn'] ;
   
   if($prevYbtn != 0) {
    $year = $PrevYear - 1;
    echo "전년";
    $prevYbtn = 0;
   } 
   if($prevMbtn != 0){ 
    $month = $prevMonth;
	$year = $PrevYear;
    if($month == 1)
    echo "전달";    
    $prevMbtn = 0;
   }
   if($nextMbtn != 0){ 
    $month = $nextMonth;
	$year = $nextYear;
    echo "다음달";
    $nextMbtn = 0;
   }
   if($nextYbtn != 0){
    $year = $nextYear + 1; 
    echo "다음년";
    $nextYbtn = 0;
   }
   
   $PrevYear   = ( $month == 1 )? ( $year - 1 ) : $year; 
   $nextYear    = ( $month == 12 )? ( $year + 1 ) : $year; 
   $prevMonth = ( $month == 1 )? 12 : ( $month - 1 ); 
   $nextMonth = ( $month == 12 )? 1 : ( $month + 1 );
   
   echo "$PrevYear-$nextYear-$prevMonth-$nextMonth"."<br/>";
   echo "$year $month"."<br/>";
   //
   $lastdate = Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
   $han_day = Array("일","월","화","수","목","금","토");
   //함수 배열 처럼 배열을 할당하는 것 
   //explode 는 문자열을 나누는 함수
   $first_day = date("w",strtotime("$year-$month-01"));
   echo "1일은 ".$han_day[$first_day]."요일 입니다"."<br/>";
   //일 월 화 수 목 금 토 0~7
   if(($year % 4 == 0 AND $year % 100 !=0)OR $year % 400 == 0){
    $lastdate[1] = 29;
    echo "윤달입니다.";
   }
   $cal_last = $lastdate[$month - 1];
   echo "마지막 날짜는".$cal_last."입니다.";
   $week = ceil(($first_day + $cal_last)/7);
   echo "이번 달은 $week 주 까지 있습니다. ";
 ?>
<br>prevYear:    <input type="text" name="PrevYear"value="<?=$PrevYear  ?>"><input type="hidden" name="prevYbtn"    value="<?$prevYbtn = 1?>">
<br>prevMonth: <input type="text" name="prevMonth" value="<?=$prevMonth ?>"><input type="hidden" name="prevMbtn"    value="<?$prevMbtn = 1?>">
<br>nextMonth: <input type="text" name="nextMonth" value="<?=$nextMonth ?>"><input type="hidden" name="nextMbtn"    value="<?$nextMbtn = 1?>">
<br>nextYear:    <input type="text" name="nextYear"value="<?=$nextYear  ?>"><input type="hidden" name="nextYbtn"    value="<?$nextYbtn =1?>">

 
<table>
 <tr>
  <td><input type="button" onclick="location.href='myCalendar.php? PrevYear=<?=$PrevYear?>&prevMonth=<?=$prevMonth ?>&prevYbtn=<?=$prevYbtn ?>'"  value="◀◀" name="">
  <td><input type="button" onclick="location.href='myCalendar.php? PrevYear=<?=$PrevYear?>&prevMonth=<?=$prevMonth?>&prevMbtn=<?=$prevMbtn ?>'"  value= "◀" name="">
  <td><?=$month ?>월
  <td><input type="button" onclick="location.href='myCalendar.php? nextYear=<?=$nextYear?>&nextMonth=<?=$nextMonth?>&nextMbtn=<?=$nextMbtn ?>'" value= "▶" name="">
  <td><input type="button" onclick="location.href='myCalendar.php? nextYear=<?=$nextYear?>&nextMonth=<?=$nextMonth?>&nextYbtn=<?=$nextYbtn ?>'" value= "▶▶" name="">
  </tr>
 </table>
 <table>
  <tr>
   <th>일</th>
   <th>월</th>
   <th>화</th>
   <th>수</th>
   <th>목</th>
   <th>금</th>
   <th>토</th>
  </tr>
   <? $date_num = 1 - $first_day;?>
   <?for($i = 0; $i < $week; $i++){?>
    <tr> 
     <?for($j=0; $j<7; $j++, $date_num++){?>
      <?if($date_num > $cal_last or $date_num < 1){?>
       <td class = <?$first_day[j]?>> </td>
       <?continue;?>
      <?}?>
      <td class = <?$first_day[j]?>><?=$date_num?></td>
     <?}?>
    </tr>
   <?}?>
  </table>
 </body>
</html>