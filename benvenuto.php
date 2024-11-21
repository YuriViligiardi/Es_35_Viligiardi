<?php
    session_start();
    if (!(isset($_SESSION["date"]))) {
        $_SESSION["date"] = date("Y-m-d h:i:s A");
        $_SESSION["login_time"] = time();
    }

    if (time() - $_SESSION["login_time"] > 20) {
        header("Location: sessione_scaduta.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>benvenuto.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="divBenvenuto">
        <h1>BENVENUTO</h1>

        <p><b><i>Nome creatore: </i></b>Yuri</p>
        <p><b><i>Cognome creatore: </i></b>Viligiardi</p>
        <p><b><i>Data di nascita creatore: </i></b> 21/03/2006</p>

        <?php
            echo "<h4>DATA ACCESSO: " . $_SESSION["date"] . "</h4>"
        ?>
        <br>
        <a class="sendButton" href="./script_logout.php">LOGOUT</a>
    </div>
</body>
</html>