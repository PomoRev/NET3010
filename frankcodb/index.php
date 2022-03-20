<?php session_start(); 

	if (!isset($_SESSION['UserName'])){
		$_SESSION['UserName'] = 'anonymous';
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
				Hello <?PHP echo $_SESSION['UserName'] ?> welcome
				to your customized Frank Co experience!
			</DIV>
			
			<DIV class="sidebar">
				some other stuff
			</DIV>
			
			<?PHP include("frankfoot.php"); ?>
		</DIV>
	</BODY>
</HTML>