<?php
error_reporting(true);
if (is_dir("../Data/" . md5($_GET["User"])) == true) {
    $User = md5($_GET["User"]);
    $Pass = md5($_GET["Pass"]);
    $Home_User = "../Data/" . $User . "/";
    // Check User , Pass it
    if (file_get_contents($Home_User . "/Pass.txt") == $Pass) {
        session_start();
        $_SESSION["LOGIN"] = "true";
        $_SESSION["User"] = $_GET["User"];
        $_SESSION["Pass"] = $_GET["Pass"];
        echo "T"; // Print T = True User And Pass
    } else {
        echo "W";
    }
} else {
    echo "N"; // Print A = Account Already
}
?>