<NAV>
	<DIV class="flexnav">
		<DIV class="navbutton"><A href="index.php">Our Company</A></DIV>
		<DIV class="navbutton"><A href="index.php">Our Educators</A></DIV>
		<DIV class="navbutton"><A href="index.php">Our Courses</A></DIV>
		<DIV class="navbutton"><A href="index.php">Contact Us</A></DIV>

<?php

	if ($_SESSION['UserName'] == 'admin'){

?>
		<DIV class="navbutton"><a href="admin.php">Admin</a></DIV>

<?php

	}

?>
		<DIV class="navbutton">
			<A href="login.php">
				<?php echo ($_SESSION['UserName'] == 'anonymous') ? "Login" : "Logout"; ?>
			</A>
		</DIV>

	</DIV>
</NAV>