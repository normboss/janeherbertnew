<!DOCTYPE html>
<html>

<head>
    <?php
       require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Painting on Location - Jane Herbert</title>
    <meta charset="UTF-8">

    <link href="../css/page7.css" media="screen" rel="stylesheet" type="text/css">
    <!-- <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css"> -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./files/images/favicon-16x16.png">
</head>

<body>


    <?php
    require '../includes/header.php';
    ?>

    <div class="artwork-container" title="Click on right for next image -- on left for previous image">
        <div class="artwork">
            <!-- <div class="numbertext">3 / 10</div> -->
            <img class="main-image" usemap="#map" src="../images/jane_herbert_nubbins.jpg">
            <img class="extra-image1" src="../images/jane-johns-bay-90.png">
            <!-- 832 x 516 -->

            <img class="extra-image2" src="../images/jane_2016.png">

            <map name="map">
                <area shape="rect" coords="416,0,832,516" alt="" href="../pages/page8.php">
                <area shape="rect" coords="0,0,415,516" alt="" href="../pages/page6.php">
            </map>

            <!-- <div class="map-next">
                <a class="next" href="../pages/page8.php">&#10095;</a>
            </div>

            <div class="map-prev">
                <a class="prev" href="../pages/page6.php">&#10094;</a>
            </div> -->


        </div>

        <div class="text-section">
            <!-- <div>
                <a class="prev" href="../pages/page6.php">&#10094;</a>
            </div> -->
            <div class="text empty"></div>
            <div class="text">
                <div class="heading">Painting on location</div>
                Some pieces are finished on site others are finished in my studio.
            </div>
            <!-- <div class="text"></div> -->
            <br>
            <!-- <div>
                <a class="next" href="../pages/page8.php">&#10095;</a>
            </div> -->

        </div>
        <?php
        require '../includes/footer.php';
        ?>
</body>

</html>