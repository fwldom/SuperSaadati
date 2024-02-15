<?php
error_reporting(false);
if (is_dir("../Data/" . md5($_GET["User"])) == false) {
    try {
        $User = md5($_GET["User"]);
        $Pass = md5($_GET["Pass"]);
        $Home_User = "../Data/" . $User . "/";
        mkdir($Home_User);
        // Directory Created Write User , Pass it
        $File_Pass = fopen($Home_User . "/Pass.txt", "w");
        fwrite($File_Pass, $Pass);
        $File_User = fopen($Home_User . "/User.txt", "w");
        fwrite($File_User, $User);
        // Writed Username , Password In User.txt & Pass.txt In Home User Directory
        echo "C"; // Print C = Account Created
        session_start();
        $_SESSION["LOGIN"] = "true";
        $_SESSION["User"] = $User;
        $_SESSION["Pass"] = $Pass;
        file_put_contents("../../log.txt", "Created User : " . $_GET["User"]."\n", FILE_APPEND);
    } catch (Exception) {
        echo "E";
    }

} else {
    echo "A"; // Print A = Account Already
}

?>