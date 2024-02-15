<?php
if (is_dir("../../products/" . $_POST["name"]) == false) {
    $Home_User = "../../products/" . $_POST["name"] . "";
    mkdir("../../products/" . $_POST["name"] . "/");
    file_put_contents("../../products/Users.txt", trim($_POST["name"]) . "\n", FILE_APPEND);
    file_put_contents($Home_User . "/sex.txt", $_POST["sex"]);
    file_put_contents($Home_User . "/size.txt", $_POST["Size"]);
    file_put_contents($Home_User . "/age.txt", $_POST["Age"]);
    file_put_contents($Home_User . "/color.txt", $_POST["SkinColor"]);
    file_put_contents($Home_User . "/country.txt", $_POST["Country"]);
    file_put_contents($Home_User . "/city.txt", $_POST["City"]);
    file_put_contents($Home_User . "/weight.txt", $_POST["Weight"]);
    file_put_contents($Home_User . "/assr.txt", $_POST["AssRadius"]);
    file_put_contents($Home_User . "/hcard.txt", $_POST["HCard"]);
    file_put_contents($Home_User . "/talent.txt", $_POST["Talent"]);
    file_put_contents($Home_User . "/price.txt", $_POST["Price"]);
    echo "Registered";
    file_put_contents("../../log.txt", " Created Product By : = ".$_SESSION["User"]." = Product Name : = " .$_POST["name"]." =\n", FILE_APPEND);
    if (isset($_FILES['image'])) {
        echo "Image Uploaded";
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

        $expensions = array("png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $Home_User . "/1." . $file_ext);
            echo "Success";
        } else {
            print_r($errors);
        }
        // Upload 2 Image
        $errors = array();
        $file_name = $_FILES['image2']['name'];
        $file_size = $_FILES['image2']['size'];
        $file_tmp = $_FILES['image2']['tmp_name'];
        $file_type = $_FILES['image2']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['image2']['name'])));

        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $Home_User . "/2." . $file_ext);
            echo "Success";
        } else {
            print_r($errors);
        }
    }
} else {
    echo "Already";
}

?>