<?PHP

	copy('files/testfile.txt', 'files/backuptestfile.txt') or die ("Sorry, I can not copy that!");
	
	// note that so much is done for you here!
	
	echo "File copied!";
	
	// you use unlink to delete a file - why?
	
?>