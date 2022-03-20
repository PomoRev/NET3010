<?PHP

	$f_ref = fopen ("testfile.txt", 'r') or die ("Failed to find file!"); // show as different from try...catch
	
	echo "If we can read characters then we an parse characters<BR> [";
	
	$chars = fread( $f_ref, 4); // note that a space is a character!
	
	fclose ($f_ref);
	
	echo $chars."]<BR>";
	
?>