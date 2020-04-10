<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vestpers - Jane Herbert</title>
    <meta charset="UTF-8">

    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./files/images/favicon-16x16.png">
</head>

<body>

    <?php
    require '../includes/header.php';
    ?>

    <div class="artwork-container">
        <div class="artwork">
            <!-- <div class="numbertext">3 / 10</div> -->
            <img src="../images/vespers_herbert2.jpg" usemap="#map" style="width:100%">
            <!-- 1137 x 747 -->
            <map name="map">
                <area shape="rect" coords="569,0,1137,747" alt="" href="../pages/page4.php" title="Click image for Next">
                <area shape="rect" coords="0,0,568,747" alt="" href="../pages/page2.php" title="Click image for Previous">
            </map>

            <a class="next" href="../pages/page4.php">&#10095;</a>
            <a class="prev" href="../pages/page2.php">&#10094;</a>

        </div>
    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">Vespers</div>
                Acrylic on canvas, 20&#x2033; x 30&#x2033; $1500&nbsp;USD<br>
                <div class="spacer10"></div>
                Painted after a late day walk with fellow artist and friend Pam Cabanas along with her dog Jessie on Hawthorne Point in Cushing, Maine.
            </div>
        </div>
    </div>

    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>