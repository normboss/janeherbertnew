<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "3";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <title>Jane Herbert - "Vespers" painting</title>
    <meta name="description" content="Late day colors illuminate a dog walker in the field known as Christina's World. 24 x 30 $1500.">


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
            <img src="../images/vespers_herbert2.jpg" usemap="#map" style="width:100%">
            <!-- 1137 x 747 -->
            <map name="map">
                <area shape="rect" coords="569,0,1137,747" alt="" href="../pages/<?php echo $page->next ?>" title="Click image for Next">
                <area shape="rect" coords="0,0,568,747" alt="" href="../pages/<?php echo $page->prev ?>" title="Click image for Previous">
            </map>

            <!-- <a class="next" href="../pages/page4.php">&#10095;</a>
            <a class="prev" href="../pages/page2.php">&#10094;</a> -->
            <?php require '../includes/prev-next.php'; ?>
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