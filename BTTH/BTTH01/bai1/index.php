<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các loài hoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách các loài hoa</h1>
    <div class="flower-list">
        <?php foreach ($flowers as $flower): ?>
            <div class="flower-item">
                <h2><?php echo $flower['name']; ?></h2>
                <p><?php echo $flower['description']; ?></p>
                <img src="<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>