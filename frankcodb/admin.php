<?php session_start(); 

	if (!isset($_SESSION['UserName'])){
		$_SESSION['UserName'] = 'anonymous';
	}
	
	$servername = "localhost";
	$username = "frankco";
	$password = "password";

	$db_connect = mysqli_connect($servername, $username, $password);

	if (!$db_connect) {
		die("Connection failed: " . mysqli_connect_error());
	}

	
?>
<!DOCTYPE html>
<HTML lang="en">
	<HEAD>
		<TITLE>Frank Co. Educational</TITLE>
		<LINK rel="stylesheet" href="frankcostyle.css">
	</HEAD>
	<BODY>
		<DIV class="gridcontainer">		
			<?PHP include("frankheader.php"); ?>
			<?PHP include("franknav.php"); ?>
			
			<DIV class="content">
				<BR>
				<OL>
<?PHP

	$query = "SELECT username, lastlogin, permissions FROM labwebsite.users";
	$cursor = mysqli_query($db_connect, $query);

	if (mysqli_num_rows($cursor) > 0) {

		while($row = mysqli_fetch_assoc($cursor)) {
			echo "<LI>User: " . $row["username"] . " last logged in " . 
				$row["lastlogin"] . " with permission level " . $row["permissions"] . 
				".</LI>";
		}
		
	} else {
		echo "<LI>There are no users!</LI>";
	}

	mysqli_close($db_connect);
	
?>	
				</OL>
			</DIV>
			
			<DIV class="sidebar">

			</DIV>
			
			<?PHP include("frankfoot.php"); ?>
		</DIV>
	</BODY>
</HTML>