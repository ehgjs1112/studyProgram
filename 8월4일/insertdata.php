<?php 
		ini_set('display_errors', 1); 
		ini_set('error_reporting', E_ALL);
		$servername = "localhost";
		$username = "sa";
		$password = "isdu804m";
		$dbname = "time_stamp";
		@$db = new mysqli($servername,$username,$password,$dbname);
		@$db = mysqli_connect($servername,$username,$password,$dbname);
		if($db){
			$sql = "insert into time_stamp(times) values";
			$timedata = "('".date("F d, Y H:i:s")."')";
			$sql = $sql.$timedata;
			$db->query($sql);
			$url = "svrtime.php"; 
			Header("Location: $url"); 
		}	
		else{
			echo 'db연결실패'.'<br/>';
		}
		mysqli_close($db);		
?> 