<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "9";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stillness - Jane Herbert</title>
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
            <!-- <div class="numbertext">3 / 10</div> -->
            <img src="../images/stillness.jpg" usemap="#map" style="width:100%">
            <!-- 1009 x 736 -->

            <map name="map">
                <area shape="rect" coords="505,0,1009,736" alt="" href="../pages/<?php echo $page->next ?>" title="Click image for Next">
                <area shape="rect" coords="0,0,504,736" alt="" href="../pages/<?php echo $page->prev ?>" title="Click image for Previous">
            </map>

            <!-- <a class="next" href="../pages/page10.php">&#10095;</a>
            <a class="prev" href="../pages/page8.php">&#10094;</a> -->
            <?php require '../includes/prev-next.php'; ?>
        </div>
    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">Stillness</div>
                Acrylic on canvas, 16&#x2033; x 20&#x2033; $1200&nbsp;USD<br>
                <div class="spacer10"></div>
                Winter down east can be arresting. This scene in Hancock had a reassuring effect upon me.
            </div>
        </div>
    </div>
    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>