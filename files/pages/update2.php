<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "update2";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if (empty($_POST["name"])) {
        //     $nameErr = "Name is required";
        // } else {
        //     $name = test_input($_POST["name"]);
        //     // check if name only contains letters and whitespace
        //     if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        //         $nameErr = "Only letters and white space allowed";
        //     }
        // }

        // if (empty($_POST["email"])) {
        //     $emailErr = "Email is required";
        // } else {
        //     $email = test_input($_POST["email"]);
        //     // check if e-mail address is well-formed
        //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         $emailErr = "Invalid email format";
        //     }
        // }

        // if (empty($_POST["website"])) {
        //     $website = "";
        // } else {
        //     $website = test_input($_POST["website"]);
        //     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        //     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        //         $websiteErr = "Invalid URL";
        //     }
        // }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>



    <?php

    if ($comment != "") {
        unlink("../includes/exhibit-content2.php");
        $comment = html_entity_decode($comment);
        $myfile = fopen("../includes/exhibit-content2.php", "w") or die("Unable to open file!");
        fwrite($myfile, $comment);
        fclose($myfile);

        // header("Refresh:0; url=update.php");
        echo "<meta http-equiv='refresh' content='0'>";
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