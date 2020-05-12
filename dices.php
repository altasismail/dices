<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>We will dice you!</h1>
    <p>click or touch on the dices!</p>
    <div class="dices">
        <img src="assets/img/zar<?php echo rand(1,6);?>.png" alt="" onclick='window.location.reload(true)'>
        <img src="assets/img/zar<?php echo rand(1,6);?>.png" alt="" onclick='window.location.reload(true)'>
    </div>
</body>
</html>