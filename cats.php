<?php
// cats.php

// Array of cat images and descriptions
$cats = [
    [
        'image' => 'https://cdn2.thecatapi.com/images/MTY3ODIyMQ.jpg',
        'name' => 'Kucing Kampung',
        'description' => 'A common domestic cat found in Malaysian households.'
    ],
    [
        'image' => 'https://cdn2.thecatapi.com/images/0XYvRd7oD.jpg',
        'name' => 'Persian Cat',
        'description' => 'A popular breed in Malaysia known for its long fur and calm demeanor.'
    ],
    [
        'image' => 'https://cdn2.thecatapi.com/images/8D--jCd21.jpg',
        'name' => 'Bengal Cat',
        'description' => 'A spotted cat with a wild appearance, loved by many in Malaysia.'
    ],
    [
        'image' => 'https://cdn2.thecatapi.com/images/ai6Jps4sx.jpg',
        'name' => 'Siamese Cat',
        'description' => 'A sleek and elegant breed often seen in Malaysian homes.'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Gallery in Malaysia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
        .card p {
            padding: 0 10px 10px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; padding: 20px;">Cat Gallery in Malaysia</h1>
    <div class="gallery">
        <?php foreach ($cats as $cat): ?>
            <div class="card">
                <img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['name']; ?>">
                <h3><?php echo $cat['name']; ?></h3>
                <p><?php echo $cat['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>