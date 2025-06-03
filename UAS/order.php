<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROSES UAS WEBPROG - ILO MATES</title>

    <!-- Custom CSS & Fonts -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rubik+One&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Detail Pesanan</h1>
    <p><strong>Kode Makanan:</strong> <?php echo $_SESSION['KodeMakanan']; ?></p>
    <p><strong>Makanan:</strong> <?php echo $_SESSION['Makanan']; ?></p>
    <p><strong>Harga:</strong> <?php echo $_SESSION['harga']; ?></p>
    <p><strong>Foto:</strong> <img src="<?php echo $_SESSION['foto']; ?>" alt="Foto Makanan"></p>
</body>
</html>

</body>
</html>