<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Me</title>
</head>

<body>
    <form action="Submit.php" method="POST" enctype="multipart/form-data">
        <label for="name">you name :</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="image">Image 1 Show In Home</label>
        <input type="file" name="image" placeholder="File" id="image" accept="image/*">
        <br>
        <label for="iamge2">Image 2 Show In Buyed</label>
        <input type="file" name="image2" id="iamge2">
        <br>
        <br>
        <label for="sex">Sex : </label>
        <input type="text" name="sex">
        <br>
        <br>
        <label for="Size">Size : </label>
        <input type="text" name="Size">
        <br>
        <br>
        <label for="Age">Age : </label>
        <input type="text" name="Age">
        <br>
        <br>
        <label for="SkinColor">Skin Color : </label>
        <input type="text" name="SkinColor">
        <br>
        <br>
        <label for="Country">Country : </label>
        <input type="text" name="Country">
        <br>
        <br>
        <label for="City">City : </label>
        <input type="text" name="City">
        <br>
        <br>
        <label for="Weight">Weight : </label>
        <input type="text" name="Weight">
        <br>
        <br>
        <label for="AssRadius">Ass Radius : </label>
        <input type="text" name="AssRadius">
        <br>
        <br>
        <label for="HCard">Health Card : </label>
        <input type="text" name="HCard">
        <br>
        <br>
        <label for="Talent">His Talent : </label>
        <input type="text" name="Talent">
        <br>
        <br>
        <label for="Price">Price For 1 hour : </label>
        <input type="text" name="Price">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>