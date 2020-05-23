<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "8";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
        ?>
    <title>Jane Herbert painting - “On Lookout Rock”</title>
    <meta name="description" content="A perched cormorant with a view of the Atlantic, acrylic on canvas. 8 x 10” $400.USD">


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
            <!-- <div class="numbertext">3 / 10</div> -->
            <img src="../images/on_lookout_rock_herbert.jpg" usemap="#map" style="width:100%">
            <!-- 871 x 694 -->

            <map name="map">
                <area shape="rect" coords="436,0,871,694" alt="" href="../pages/<?php echo $page->next ?>" title="Click image for Next">
                <area shape="rect" coords="0,0,435,694" alt="" href="../pages/<?php echo $page->prev ?>" title="Click image for Previous">
            </map>

            <!-- <a class="next" href="../pages/page9.php">&#10095;</a>
            <a class="prev" href="../pages/page7.php">&#10094;</a> -->
            <?php require '../includes/prev-next.php'; ?>
        </div>

    </div>

    <div class="text-block">
        <div class="text-section">
            <div class="text">
                <div class="heading">On Lookout Rock</div>
                Acrylic on canvasboard 8&#x2033; x 10&#x2033; $400&nbsp;USD<br>
                <div class="spacer10"></div>
                Changing light forces me to work quickly.
            </div>
        </div>
    </div>
    <?php
    require '../includes/footer.php';
    ?>

</body>

</html>