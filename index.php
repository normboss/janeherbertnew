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

    <title>Jane Herbert | Maine Coastal Artist</title>
    <meta name="description" content="Preview original paintings for purchase by Maine coastal artist.">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <style>
        a {
            color: #FFF;
        }
    </style>
</head>

<body>
    <a href="./files/pages/low-pressure-appleton-ridge.php">Click to begin slideshow</a>

    <script>
        <?php
        require './files/includes/filenames.php';

        // echo 'document.getElementById( "' . $f2 . '" ).style.display = "none";';
        if (isset($_SESSION['pagenumber'])) {
            $pageNum = $_SESSION['pagenumber'];
            $page = $painting_filenames[$pageNum];
            // print "console.log('".$page->next."')";    // $painting_filenames . "<br>";
            echo 'window.location.href = "files/pages/' . $page->next . '";';
        }
        ?>
        // window.location.href = "./files/pages/home.php";
    </script>
</body>

</html>