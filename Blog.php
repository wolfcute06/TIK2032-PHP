<?php
require 'connect.php';
$blog=query("SELECT * from artikel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <header>
        <nav>
            <h1>Blog</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    
    <div class="card1">
    <?php foreach ($blog as $b) : ?>
        <img src="Images/<?=$b["gambar"];?>" width="100%">
        <div class="container">
            <h4><a href="Teknologi.php"><?=$b["teks"];?></a></h4>
        </div>
        <?php endforeach; ?>
    </div>
    

<footer>
    <div class="copyright">
        <p>&copy; 2024 Sabina Massie</p>
    </div>
</footer>
</body>
</html>
