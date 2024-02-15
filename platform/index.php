<?php
include("../config.php");
session_start();
if (isset($_SESSION["LOGIN"]) == "true") {
    Run();
} else {
    echo "<script>location.href = 'Login/'</script>";
    exit();
}
function Run()
{
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Super Saadati,Saadati Gold , Platform Super Saadati , Khalag Gold , Iranian Super Saadati , Best Site For Buy And Sell Whore And Super ">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <link rel="icon" href="../ico/ico-plt.png" sizes="150x150">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Saadati</title>
</head>

<body style="background-color:black;" onload="OnLoad()">
    <div id="PanelUp">
        <p>Super</p>
    </div>
    <div id="PanelDown">
        <p>Saadati</p>
    </div>
    <marquee id="MarkUp" behavior="" direction="center">** XXX Super Saadati XXX **</marquee>
    <marquee id="MarkLe" behavior="" direction="center">** XXX 30% off khalag XXX **</marquee>
    <marquee id="MarkRe" behavior="" direction="center">** XXX Free Abasi ....XXX **</marquee>
    <marquee id="MarkBo" behavior="" direction="center">** XXX Free Saadati ..XXX **</marquee>
    <div id="products">

    </div>
    <div id="desproduct"></div>
    <button onclick="Link(url = 'Support/')" id="Support">Support</button>
    <button onclick="Link(url = 'NewProduct/')" id="Sell">Sell Me</button>
</body>

</html>
<script src="index.js"></script>