<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "5";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ubiquity - Jane Herbert</title>
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
            <div class="numbertext">3 / 10</div>
            <img src="../images/ubiquity.jpg" usemap="#map" style="width:100%">
            <!-- 979 x 720 -->

            <map name="map">
                <area shape="rect" coords="490,0,979,720" alt="" href="../pages/page6.php" title="Click image for Next">
                <area shape="rect" coords="0,0,489,720" alt="" href="../pages/page4.php" title="Click image for Previous">
            </map>

            <a class="next" href="../pages/page6.php">&#10095;</a>
            <a class="prev" href="../pages/page4.php">&#10094;</a>

        </div>

    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">Ubiquity</div>
                Acrylic on paperboard, 18&#x2033; x 24&#x2033; $900&nbsp;USD<br>
                <div class="spacer10"></div>
                Done on location on an afternoon with a rising tide. Fog included me in the hush of the sacred.
            </div>
        </div>

    </div>

    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>