<?php session_start(); // allows us to have persistence of our HTTP session

	// check if we already have a session started and make the default name
	// anonymous.

	if (!isset($_SESSION['UserName'])){
		$_SESSION['UserName'] = 'anonymous';
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['username'];
		if (!empty($name)){
			$_SESSION['UserName'] = $name;
		}
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
				<DIV class="login">
					<BR>
<?PHP
	if ($_SESSION['UserName'] == 'anonymous')
	{
?>
	
					<FORM action="login.php" method="post">
						<TABLE class="formtable">
							<TR>
								<TD>User Name:</TD>
								<TD><INPUT type="text" name="username"></TD>
							</TR>
							<TR>
								<TD>Password:</TD>
								<TD><INPUT type="password" name="password"><BR></TD>
							</TR>
							<TR class="buttons">
								<TD  colspan="2"><INPUT type="submit" 
									value="SUBMIT"></TD>
							</TR>
						</TABLE>
					</FORM>
<?PHP
	} else {
		
		echo "Welcome " . $_SESSION['UserName'] . "<BR>"; 
?>

					<FORM action="login.php" method="post">
						<INPUT type="hidden" name="username" value="anonymous">
						<INPUT type="submit" value="LOG OUT">
					</FORM>

<?PHP		
		
	}
?>
					<BR>
				</DIV>
			</DIV>	
			
			<?PHP include("frankfoot.php"); ?>
		</DIV>
	</BODY>
</HTML>