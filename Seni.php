<?php
require 'connect.php';
$seni=query("SELECT * from seni");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seni</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seni.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php foreach ($seni as $s) : ?>
    <h2 class="seni"><?=$s["judul"];?></h2>
    <h3 class="tech"><a href="Teknologi.php"><?=$s["teknologi"];?></a></h3>
    <h3 class="food"><a href="Makanan.php"><?=$s["makanan"];?></a></h3>
    <p class="text" id="demo"><?=$s["isi"];?>

    <div class="image">
        <img src="Images/<?=$s["gambar"];?>" weight="200" height="300">
    </div>
    <?php endforeach; ?>
</body>
<footer>
    <div class="copyright">
        <p>&copy; 2024 Sabina Massie</p>
    </div>
</footer>
<script src="seni.js"></script>
</html>