<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "1";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    require 'files/includes/keywords.php';
        ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
</head>

<body>
    <?php
    require '../includes/header.php';
    ?>
    <div class="artwork-container">

        <div class="artwork">
            <!-- <div class="numbertext">1 / 10</div> -->
            <img src="../images/low_pressure_appleton_ridge72px.jpg" usemap="#map" style="width:100%">
            <!-- 1,364px × 673px (scaled to 1,000px × 493px) -->

            <map name="map">
                <area shape="rect" coords="660,0,1364,673" alt="" href="../pages/<?php echo $page->next ?>" title="Click image for Next">
                <area shape="rect" coords="0,0,660,673" alt="" href="../pages/<?php echo $page->prev ?>" title="Click image for Previous ">
            </map>

            <!-- <a class="next" href="../pages/<?php echo $page->next ?>">&#10095;</a>
            <a class="prev" href="../pages/<?php echo $page->prev ?>">&#10094;</a> -->
            <?php require '../includes/prev-next.php'; ?>
        </div>

    </div>
    <div class="text-block">
        <div class="text-section">
            <!-- <a class="prev" href="./files/pages/page10.php">&#10094;</a> -->
            <div class="text index">I am a life long painter living in Damariscotta, Maine. I respond to the wisdom I see in nature as I paint on location along the coast and hills of Maine. It is my pleasure to offer a preview of my work here.</div>
            <br>
            <div class="image">
                <img src="../images/jane.png" style="width:100%">
            </div>

            <div class="text index">
                <div class="heading">Low Pressure, Appleton Ridge</div>
                Acrylic on Linen, 18&#x2033; x 36&#x2033; $1500&nbsp;USD<br>
                <div class="spacer10"></div>
                Spring rains brought a verdant lushness to the farms of Appleton. I included the hawk I saw briefly gliding down to the trees.
            </div>
            <br>
            <!-- <a class="next" href="./files/pages/page2.php">&#10095;</a> -->
        </div>
    </div>
    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>