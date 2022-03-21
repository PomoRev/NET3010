<?php

    $errormessage = "";

    if((isset($_POST['submit'])) and (isset($_FILES['uploadable']['name']))){

        if (trim($_FILES['uploadable']['name']) == "") {

            $errormessage = "File name is blank.";
            
        } else {

            $target_directory = "files\\";
            $file_to_upload = $target_directory . basename($_FILES["uploadable"]["name"]);

            if (file_exists($file_to_upload)){

                $errormessage = "Sorry this file name is taken!";

            } elseif (move_uploaded_file($_FILES["uploadable"]["tmp_name"], $file_to_upload)){

                $errormessage = "File uploaded!";

            } else {

                $errormessage = "File was not uploaded.";

            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prof. Frank Emanuel">
    <meta name="email" content="emanuef@algonquincollege.com">
    <meta name="date" content="2022-03-19">

    <link rel="stylesheet" href="general.css">

    <title>PHP File I/O Workplace</title>
</head>
<body>
    <header>
        File-a-nator 12000!
    </header>

    <div id="files" class="content">

<?php

    $directory = dir(getcwd().'\files');    // gets the file listings from the current working directory.

    echo "Working Path: " . $directory->path . "<br>";

    echo "<ul>";
    while (($file = $directory->read()) !== false ){

        if (substr($file, -4, 4) == '.txt') {
            echo "<li><a href='fileInterface.php?tfile=" . $file . "'>" . $file . "</a></li>";
        } else echo '<li>' . $file . '</li>';
    }

    $directory->close();                    // always close the file pointer

?>

    </div>

    <div class="content">

<?php

    if (isset($_GET['tfile'])){

        $file_target = getcwd(). '\files\\' . $_GET['tfile'];

        echo "openning " . $file_target . "<br><br>";

        $text_file = fopen( $file_target , "r") or die ("Yikes, unable to open file");

        while ( !feof($text_file)) {

            echo "] " . fgets($text_file) . "<br>";

        }

        fclose( $text_file );
    }

?>

    </div>

    <form class="content" action="fileinterface.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="uploadable" id="uploadable">
        <input type="submit" value="Send File" name="submit">

    </form>

    <div class="content" id="errorBox">

<?php 

    if ( $errormessage !== "" ) echo $errormessage;

?>

    </div>


</body>
</html>