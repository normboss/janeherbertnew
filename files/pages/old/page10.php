<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "10";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Studio - Jane Herbert</title>
    <meta charset="UTF-8">

    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
</head>

<body>


    <?php
    require '../includes/header.php';
    ?>

    <div class="artwork-container">
        <div class="artwork">
            <!-- <div class="numbertext">10 / 10</div> -->
            <img src="../images/studio.jpg" usemap="#map" style="width:100%">
            <!-- 1125 x 753 -->

            <map name="map">
                <area shape="rect" coords="563,0,1125,753" alt="" href="../pages/home.php" title="Click image for Next">
                <area shape="rect" coords="0,0,562,753" alt="" href="../pages/page9.php" title="Click image for Previous">
            </map>

            <a class="next" href="../pages/home.php">&#10095;</a>
            <a class="prev" href="../pages/page9.php">&#10094;</a>

        </div>
    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">I welcome visitors to my studio</div>
                Here is where I work on large pieces and paintings started outside during warm weather. Contact me to arrange for a visit.
            </div>
        </div>
    </div>


    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>