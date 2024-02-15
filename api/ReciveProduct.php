<?php
$fileContentArray = file("../products/Users.txt");
$C = 0;
// نمایش محتوای آرایه
foreach ($fileContentArray as $line) {
    $User = trim($line);
    $C += 1;
    if (strval($C) == $_GET["ID"]) {
        echo "<img id='imgproduct' src='../products/".trim($line)."/1.png'>";
        echo "<p id='Price'>".file_get_contents("../products/".trim($line)."/price.txt")." UP</p>";
        echo "<button id='Buy' onclick="."SubmitBuy(id=".$C.")>Buy</button>";
        echo "<pre>";
        echo "<br>Sex :" . file_get_contents("../products/" . $User . "/sex.txt");
        echo "<br>Size :" . file_get_contents("../products/" . $User . "/size.txt");
        echo "<br>Age :" . file_get_contents("../products/" . $User . "/age.txt");
        echo "<br>Skin Color :" . file_get_contents("../products/" . $User . "/color.txt");
        echo "<br>Country :" . file_get_contents("../products/" . $User . "/country.txt");
        echo "<br>City :" . file_get_contents("../products/" . $User . "/city.txt");
        echo "<br>Weight :" . file_get_contents("../products/" . $User . "/weight.txt");
        echo "<br>Ass Radius :" . file_get_contents("../products/" . $User . "/assr.txt");
        echo "<br>Helath Card :" . file_get_contents("../products/" . $User . "/hcard.txt");
        echo "<br>Talent :" . file_get_contents("../products/" . $User . "/talent.txt");
        echo "<br>Price  :" . file_get_contents("../products/" . $User . "/price.txt");
        echo "</pre>";
    }
}
?>