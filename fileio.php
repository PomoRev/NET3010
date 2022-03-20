<?PHP

	$file_pointer = fopen ("files/testfile.txt", 'w') or die ("Failed to make/find file!");
	
	$content = " something\n something else\n another thing\n";
	
	fwrite ($file_pointer, $content) or die ("Could not write to file, sorry.");
	fclose ($file_pointer);
	
	echo "File 'testfile.txt' has been written.";
	
?>