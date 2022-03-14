<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prof. Frank Emanuel">
    <meta name="email" content="emanuef@algonquincollege.com">
    <meta name="date" content="2022-03-13">
    <title>First National Web Page</title>
    <link rel="stylesheet" href="general.css">
    <script src="general.js"></script>
</head>
<body>
    <?php include("L9Header.php"); ?>
    <div class="content">
        <p class="article">
            <?php echo $_POST["name"] ?? $_GET["name"] ?? ""; ?>
            At First National Web Page we take web development 
            seriously. Take a look at some of our wonderful code:
        </p>
        <code>
            function loginBox() {

            <ul>
                document.getElementById("loginBox").style.display
                    = "block";  
            </ul>

            }
        </code>
        <p class="article">
            Nice isn't it?
        </p>
        <p class="article">
            Why write four lines of code, invoke a bunch of variables,
            and spend hours debugging said code when you can write a single
            line and put it into a spiffy little reusable function? We
            thought you would agree. 
        </p>
    </div>
    <div class="content">
        <img src="images/matrix-g960f47532_1280.jpg" alt="matrix banner image">
    </div>
    <footer>
        all content &copy; Frank Emanuel, 2022.
    </footer>
</body>
</html>