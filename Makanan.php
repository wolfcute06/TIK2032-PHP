<?php
require 'connect.php';
$makanan=query("SELECT * from makanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Makanan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="makanan.css">
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
    <?php foreach ($makanan as $m) : ?>
    <h2 class="makanan"><?=$m["judul"];?></h2>
    <p class="text" id="demo"><?=$m["isi"];?></p>
    <h3 class="tech"><a href="Teknologi.php"><?=$m["teknologi"];?></a></h3>
    <h3 class="art"><a href="Seni.php"><?=$m["seni"];?></a></h3>

    <div class="image">
        <img src="Images/<?=$m["gambar"];?>" weight="200" height="300">
    </div>
    <?php endforeach; ?>
</body>
<footer>
    <div class="copyright">
        <p>&copy; 2024 Sabina Massie</p>
    </div>
</footer>
<script src="makanan.js"></script>
</html>