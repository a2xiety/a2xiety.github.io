<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main"></div>
            <form action="insert.php" method="post">
                <h2>Get Your Bags Here</h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name='name'>
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">choose product image</label>
                <button name='upload'> ✅upload product</button>
                <br><br>
                <a href="products.php">show all product</a>
            </form>
        </div>
        <p>Developed By mr.54b3r</p>
    </center>
</body>
</html>