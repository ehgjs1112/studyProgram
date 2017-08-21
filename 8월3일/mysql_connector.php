<!doctype html>
<html>
<body>
<?php

ini_set('display_errors', 1); 
ini_set('error_reporting', E_ALL);
@$db = new mysqli('localhost', 'root', 'Nielsen22','time');
@$db=mysqli_connect('localhost', 'root', 'Nielsen22','time');
if($db){
 echo "db 연결성공";
}
else{
 echo "db 연결 실패";
}
$sql="create table php_tbl(num int, name varchar(10))";
mysql_query($sql, $db);
?>

<script>
alert("테이블 생성");
</script>
</body>
</html>