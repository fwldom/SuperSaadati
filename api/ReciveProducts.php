<?php
$fileContentArray = file("../products/Users.txt");
$C = 0;
// نمایش محتوای آرایه
foreach ($fileContentArray as $line) {
    $C++;
    echo "<div id='product'>";
    echo "<p id='Name'>".$line."</p>";
    echo "<img id='imgproduct' src='../products/".trim($line)."/1.png'>";
    echo "<p id='Price'>".file_get_contents("../products/".trim($line)."/price.txt")." UP</p>";
    echo "<button id='Buy' onclick="."ReciveProduct(id=".$C.")>Buy</button>";
    echo "</div>";
}
?>