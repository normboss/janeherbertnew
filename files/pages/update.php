<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "update";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}

    $content1 = "";
    $content2 = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["content1"])) {
            $content1 = $_POST["content1"];
        } else {
            $content1 = "";
        }


        if (!empty($_POST["content2"])) {
            $content2 = $_POST["content2"];
        } else {
            $content2 = "";
        }

    }

    if ($content1 != "") {
        unlink("../includes/exhibit-content1.php");
        $myfile = fopen("../includes/exhibit-content1.php", "w") or die("Unable to open file!");
        fwrite($myfile, $content1);
        fclose($myfile);

        // header("Refresh:0; url=update.php");
        echo "<meta http-equiv='refresh' content='0'>";
    }

    if ($content2 != "") {
        unlink("../includes/exhibit-content2.php");
        $myfile = fopen("../includes/exhibit-content2.php", "w") or die("Unable to open file!");
        fwrite($myfile, $content2);
        fclose($myfile);

        // header("Refresh:0; url=exhibits.php");
        // echo "<meta http-equiv='refresh' content='0'>";

        echo '<script>';
        echo 'window.location.href = "exhibits.php"';
        echo '</script>';
    }
    ?>
    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function pretty() {
            $("#contact-form").attr("action", "misc.php");
        }
    </script>


</body>

</html>