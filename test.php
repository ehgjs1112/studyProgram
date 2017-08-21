<html>
<?php
	class Human {
		
		var $Walk = "";
		var $Eat = "";

		function ToWalk(){
			echo($this->ToWalk. " 걷는다");
		}

		function ToEat(){
			echo($this->ToEat. " 먹는다.");
		}
	}

	$human = new Human();

	$human -> ToWalk = "빨리";
	$human->ToEat = "천천히";

	$human->ToWalk();

	echo("<br>");
	$human->ToEat();
?>
</html>