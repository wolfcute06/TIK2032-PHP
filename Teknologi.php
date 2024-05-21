<?php
require 'connect.php';
$teknologi=query("SELECT * from teknologi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teknologi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teknologi.css">
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
    <?php foreach ($teknologi as $t) : ?>
        <h2 class="teknologi"><?=$t["judul"];?></h2>
        <h3 class="art"><a href="Seni.php"><?=$t["seni"];?></a></h3>
        <h3 class="food"><a href="Makanan.php"><?=$t["makanan"];?></a></h3>
        <p class="text" id="demo"><?=$t["isi"];?></p>

        <div class="image">
        <img src="Images/<?=$t["gambar"];?>" weight="200" height="300">
    </div>
    <?php endforeach; ?>
</body>
<footer>
    <div class="copyright">
        <p>&copy; 2024 Sabina Massie</p>
    </div>
</footer>
<script src="teknologi.js"></script>
</html>
