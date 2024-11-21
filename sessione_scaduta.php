<?php
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessione_scaduta.php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="divSessioneScaduta">
        <h1>SESSIONE SCADUTA</h1>
        <br>
        <br>
        <a class="sendButton" href="./pagina_login.html">RETURN LOGIN</a>
    </div>
</body>
</html>