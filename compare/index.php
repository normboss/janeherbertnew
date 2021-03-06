<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jane Herbert</title>
    <meta charset="UTF-8">

    <link href="./files/css/index.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
</head>

<body>
    <?php
    require './files/includes/header.php';
    ?>
    <div class="artwork-container">

        <div class="artwork">
            <!-- <div class="numbertext">1 / 10</div> -->
            <img src="./files/images/low_pressure_appleton_ridge72px.jpg" style="width:100%">
            <div class="next-prev">
                <a class="prev" href="./files/pages/page10.php">&#10094;</a>
                <a class="next" href="./files/pages/page2.php">&#10095;</a>
            </div>
        </div>
        <div class="text-section">
            <!-- <a class="prev" href="./files/pages/page10.php">&#10094;</a> -->
            <div class="text index">I am a life long painter living in Damariscotta, Maine. I respond to the wisdom I see in nature as I paint on location along the coast and hills of Maine. It is my pleasure to offer a preview of my work here.</div>
            <br>
            <div class="image">
                <img src="./files/images/jane.jpg" style="width:100%">
            </div>

            <div class="text index">
                <div class="heading">Low Pressure, Appleton Ridge</div>
                Acrylic on Linen, 18 x 36 inches $1500. USD Spring rains brought a verdant lushness to the farms of Appleton. I included the hawk I saw briefly gliding down to the trees.
            </div>
            <br>
            <!-- <a class="next" href="./files/pages/page2.php">&#10095;</a> -->
        </div>
        <?php
        require './files/includes/footer.php';
        ?>


    </div>
    <br>

</body>

</html>