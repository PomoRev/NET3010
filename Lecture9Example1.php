<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>PHP Testing File</TITLE>
	</HEAD>
	<BODY>
		<?PHP

			$variable = 14;
			$myArray = array(34, 34, 23, 12);

			echo 'hello $myArray[3] ';
			#echo $_GET['name'] . " has " . strlen($_GET['name']) . " letters.";

			$myValue = ($variable < 25) ? 14 : 90;

			echo "<br> the number is $myValue.";

			echo $_POST["name"] ?? $_GET["name"] ?? "anonymous";

			echo "<br>";

			$car = array("wheels"=>4, "doors"=>"4", "drivers"=>"1");

			foreach ($car as $part => $number){

				echo "$number $part";
				echo $number > 1 ? ", " : ".<br>";

			}


		?>
	</BODY>
</HTML>