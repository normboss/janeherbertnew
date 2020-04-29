<header class="header">
    <div class="header-logo">
        Jane Herbert
    </div>
    <div class="header-text">
        <!-- <a href="/JaneHerbertNew/index.php">Home</a> -->
        <a href="low-pressure-appleton-ridge.php">HOME</a>
    </div>
    <div class="header-text">
        <!-- <a href="/JaneHerbertNew/files/pages/contact.php" target="_blank">Contact</a> -->
        <a href="contact.php" target="_blank">CONTACT</a>
    </div>
    <div class="header-text">
        <a href="exhibits.php">EXHIBITS</a>
    </div>
</header>
<?php
    require '..\includes\filenames.php';
    if ( isset($_SESSION["pagenumber"]) ){
        $pageNum = $_SESSION['pagenumber'];
        $page = $painting_filenames[$pageNum];
    }

?>