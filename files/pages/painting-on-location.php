<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "7";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
        ?>
    <title>Jane Herbert - Painting on location in coastal Maine</title>
    <meta name="description" content="Jane Herbert and her easel outside at favorite spot on coastal Maine.">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
</head>

<body>


    <?php
    require '../includes/header.php';
    ?>

    <div class="artwork-container" title="Click on right for next image -- on left for previous image">
        <div class="artwork">
            <!-- <div class="numbertext">3 / 10</div> -->
            <!-- 832 x 516 -->
            <img class="main-image" usemap="#map" src="../images/jane_herbert_nubbins.jpg" style="width:100%">

            <img class="extra-image1" src="../images/jane-johns-bay-90.png" style="width: 280px; height: auto;">
            <img class="extra-image2" src="../images/jane_2016.png" style="width: 370px; height: auto;">

            <map name="map">
                <area shape="rect" coords="416,0,832,516" alt="" href="../pages/<?php echo $page->next ?>" title="Click image for Next">
                <area shape="rect" coords="0,0,415,516" alt="" href="../pages/<?php echo $page->prev ?>" title="Click image for Previous">
            </map>

            <!-- <a class="next" href="../pages/page8.php">&#10095;</a>
            <a class="prev" href="../pages/page6.php">&#10094;</a> -->
            <?php require '../includes/prev-next.php'; ?>
        </div>
    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text text7">
                <div class="heading">Painting on location</div>
                Some pieces are finished on site others are finished in my studio.
            </div>
        </div>
    </div>

    <?php
    require '../includes/footer.php';
    ?>
</body>

</html>