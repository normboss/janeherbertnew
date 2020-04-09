<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eagle over Hatchet Cove - Jane Herbert</title>
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
            <div class="numbertext">3 / 10</div>
            <img src="../images/eagle_nubbins_72.jpg" usemap="#map" style="width:100%">
            <!-- 1315 x 638 -->

            <map name="map">
                <area shape="rect" coords="579,0,1150,750" alt="" href="../pages/page5.php">
                <area shape="rect" coords="0,0,578,750" alt="" href="../pages/page3.php">
            </map>

            <div class="map-next">
                <!-- &#10095; -->
                <a class="next" href="../pages/page5.php">&#10095;</a>
            </div>

            <div class="map-prev">
                <!-- &#10094; -->
                <a class="prev" href="../pages/page3.php">&#10094;</a>
            </div>

        </div>

        <div class="text-section">
            <div class="text empty"></div>
            <div class="text">
                <div class="heading">Eagle over Hatchet Cove</div>
                Acrylic on canvas, 18&#x2033; x 36&#x2033; $1500&nbsp;USD<br>
                <div class="spacer10"></div>
                 A lone eagle in flight added to the magic of a misty day.
            </div>
            <!-- <div class="text"></div> -->
            <br>
            <!-- <div>
                <a class="next" href="../pages/page5.php">&#10095;</a>
            </div> -->

        </div>
        <?php
        require '../includes/footer.php';
        ?>

</body>

</html>