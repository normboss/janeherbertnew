<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "6";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
        ?>
    <title>ane Herbert painting - “Dyer River Marsh”</title>
    <meta name="description" content="Bucolic scene of Sheepscott meadows the artist completed on the spot.16 x 20” $700.USD">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
</head>

<body>


    <?php
    require '../includes/header.php';
    ?>

    <div class="artwork-container">
        <div class="artwork">
            <img src="../images/dyer_river_marsh.jpg" usemap="#map" style="width:100%">
            <!-- 600 x 468 -->

            <map name="map">
                <area shape="rect" coords="300,0,600,468" alt="" href="../pages/<?php echo $page->next ?>" title="Click image for Next">
                <area shape="rect" coords="0,0,299,468" alt="" href="../pages/<?php echo $page->prev ?>" title="Click image for Previous">
            </map>

            <!-- <a class="next" href="../pages/page7.php">&#10095;</a>
            <a class="prev" href="../pages/page5.php">&#10094;</a> -->
            <?php require '../includes/prev-next.php'; ?>
        </div>
    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">Dyer River Marsh</div>
                Acrylic on canvas, 16&#x2033; x 20&#x2033; $700&nbsp;USD<br>
                <div class="spacer10"></div>
                One of the bucolic scenes of Sheepscott begun on location and finished in my studio.
            </div>
        </div>
    </div>
    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>