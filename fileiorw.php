<?PHP

	$file_pointer = fopen ("files/testfile.txt", 'r') or die ("Failed to find file!"); // show as different from try...catch
	
	echo "on the inside we have : ";
	
	$line = fgets($file_pointer);
		
	fclose ($file_pointer);
	
	echo $line."<BR> groovy!";

	
	
?>