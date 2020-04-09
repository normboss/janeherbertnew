<!DOCTYPE html>
<html>

<head>
    <?php
       require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>On Lookout Rock - Jane Herbert</title>
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
            <img src="../images/on_lookout_rock_herbert.jpg" usemap="#map" style="width:100%">
            <!-- 871 x 694 -->

            <map name="map">
                <area shape="rect" coords="436,0,871,694" alt="" href="../pages/page9.php">
                <area shape="rect" coords="0,0,435,694" alt="" href="../pages/page7.php">
            </map>

            <div class="map-next">
                <!-- &#10095; -->
                <a class="next" href="../pages/page9.php">&#10095;</a>
            </div>

            <div class="map-prev">
                <!-- &#10094; -->
                <a class="prev" href="../pages/page7.php">&#10094;</a>
            </div>

        </div>

        <div class="text-section">
            <!-- <div>
                <a class="prev" href="../pages/page7.php">&#10094;</a>
            </div> -->
            <div class="text empty"></div>
            <div class="text">
                <div class="heading">On Lookout Rock</div>
                Acrylic on canvasboard 8&#x2033; x 10&#x2033; $400&nbsp;USD<br>
                <div class="spacer10"></div>
                 Changing light forces me to work quickly.
            </div>
            <!-- <div class="text"></div> -->
            <br>
            <!-- <div>
                <a class="next" href="../pages/page9.php">&#10095;</a>
            </div> -->

        </div>
        <?php
        require '../includes/footer.php';
        ?>

</body>

</html>