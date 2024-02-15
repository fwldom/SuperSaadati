<?php
session_start();
$fileContentArray = file("../../products/Users.txt");
$C = 0;
// نمایش محتوای آرایه
foreach ($fileContentArray as $line) {
    $C++;
    if (strval($C) == $_GET["ID"]) {
        echo "<div id='product'>";
        echo "<img width='100%' id='imgproduct' src='../../products/" . trim($line) . "/2.png'>";
        echo "<p id='Price'>" . file_get_contents("../../products/" . trim($line) . "/price.txt") . " UP</p>";
        echo "</div>";
        $currentDateTime = new DateTime();
        $currentDateTime = $currentDateTime->format('Y-m-d H:i:s');
        file_put_contents("../../log.txt", trim($line) . " Buyed By " . $_SESSION["User"] . " Date : " . $currentDateTime . "\n", FILE_APPEND);
    }
}
?>
<html>
<title>Buyed</title>
<button onclick="location.href = '../'">Back To Home</button>

</html>