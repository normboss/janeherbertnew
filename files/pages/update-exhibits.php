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

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Jane Herbert</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/update.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
            window.location.reload(true);
            return true;
        }
    </script>

</head>

<body>
    <main>
        <br><br><br><br>
        <div class="form-container">

            <?php
            // generate a new token for the $_SESSION superglobal and put them in a hidden field
            $newToken = generateFormToken('form1');
            ?>

            <form action="update.php" method="post" >
                <label for="fname">Content1:</label>
                <input type="text" id="fname" name="content1" size="40" value="<?php require '../includes/exhibit-content1.php'; ?>"><br><br>
                <label for="lname">Content2:</label>
                <input type="text" id="lname" name="content2" size="40" value="<?php require '../includes/exhibit-content2.php'; ?>"><br><br>
                <input type="submit" value="Submit">
            </form>

        </div>

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function pretty() {
            $("#contact-form").attr("action", "misc.php");
        }
    </script>


</body>

</html>