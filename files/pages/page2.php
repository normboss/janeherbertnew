<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Side LIght - Jane Herbert</title>
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
            <!-- <div class="numbertext">2 / 10</div> -->
            <!-- 1155 x 750 -->
            <img src="../images/side_light_herbert.jpg" usemap="#map" style="width:100%">

            <map name="map">
                <area shape="rect" coords="579,0,1150,750" alt="" href="../pages/page3.php" title="Click image for Next">
                <area shape="rect" coords="0,0,578,750" alt="" href="../pages/home.php" title="Click image for Previous">
            </map>

            <a class="next" href="../pages/page3.php">&#10095;</a>
            <a class="prev" href="../pages/home.php">&#10094;</a>
        </div>


    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">Side LIght</div>
                Acrylic on linen, 24&#x2033; x 36&#x2033; $2500&nbsp;USD<br>
                <div class="spacer10"></div>
                It’s always hard to pack up my paints at moments like this one on little Morse Island in Friendship, Maine.
            </div>
            <br>
        </div>

    </div>

    <?php
    require '../includes/footer.php';
    ?>


</body>

</html>