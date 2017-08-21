<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title> 서버시각 표시 </title>
</head>
 
<body>
    <div id="server_time"></div>
<?php 
 echo "query()함수를 이용한 테이블 생성 <br />";
 
 $host = 'localhost';
 $user = 'root';
 $pw = 'ldh';
 $dbName = 'timedata';
 $mysqli = new mysqli($host, $user, $pw, $dbName);

?> 
<script>
var srv_time = "<?php echo date("F d, Y H:i:s", time()); ?>";
var now = new Date(srv_time);

setInterval("server_time()", 1000); 
function server_time()
{
    now.setSeconds(now.getSeconds()+1);
 
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
 
    if (month < 10){
        month = "0" + month;
    }
 
    if (date < 10){
        date = "0" + date;
    }
 
    if (hours < 10){
        hours = "0" + hours;
    }
 
    if (minutes < 10){
        minutes = "0" + minutes;
    }
 
    if (seconds < 10){
        seconds = "0" + seconds;
    }
 
    document.getElementById("server_time").innerHTML = year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds;
}
</script>
</body>
</html>