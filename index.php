<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "0";
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    require 'files/includes/globalSiteTag.html';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jane Herbert</title>
    <style>
        a {
            color: #FFF;
        }
    </style>
</head>
<body>
    <a href="./files/pages/home.php">Click to begin slideshow</a>

    <script>

<?php
    require './files/includes/filenames.php';

    // echo 'document.getElementById( "' . $f2 . '" ).style.display = "none";';
    if (isset($_SESSION['pagenumber']))
    {
        $pageNum = $_SESSION['pagenumber'];
        $page = $painting_filenames[$pageNum];
        // print "console.log('".$page->next."')";    // $painting_filenames . "<br>";
        echo 'window.location.href = "files/pages/'. $page->next .'";';

    }
?>
        // window.location.href = "./files/pages/home.php";
    </script>
</body>
</html>
