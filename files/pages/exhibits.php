<!DOCTYPE html>
<html>

<head>
    <?php
    require '../includes/globalSiteTag.html';
        ?>
    <title>Jane Herbert| exhibits</title>
    <meta name="description" content="Announcements of special events. Shown: “December Twilight” 18” x 24” $1300.USD">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/exhibits.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
</head>

<body>


    <?php
    require '../includes/header.php';
    ?>

    <div class="artwork-container">
        <div class="artwork">
            <img src="../images/december_twilight.jpg" style="width:60%">
            <div class="exhibits">
                <div class="text1">Special Events</div>
                <br>
                <div class="text2">Corona Virus Impacts Everyone</div>
                <p>
                    My heart joins with you in commemorating the personal and collective
                    grief we share as well as the gratitude we feel for each other as we
                    each do our part to soften the impact of the pandemic.
                </p>
                <div class="event">
                    <span class="text4">
                        <?php require '../includes/exhibit-content1.php'; ?>
                    </span><br>

                    <span class="text0">
                        <?php require '../includes/exhibit-content2.php'; ?>
                    </span><br>

                    
                    <span class="text4">Richard Boyd Art Gallery</span><br>
                    <span class="tex5">15 Epps Street</span><br>
                    <span class="tex5">Peaks Island, Portland, Maine</span><br>
                    <span class="tex5">August Hours 10 - 5</span><br>
                </div>
            </div>


        </div>

        <div class="text-section">
            <div class="text empty"></div>
            <div class="text">
                <div class="heading">December Twilight</div>
                Acrylic on Canvas 18&#x2033; x 24&#x2033; $1300 USD.<br>
                <div class="spacer10"></div>
                I painted this in response to an evening with a view of John’s Bay.
            </div>
            <br>
        </div>
        <?php
        require '../includes/footer.php';
        ?>

</body>

</html>