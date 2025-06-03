<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS WEBPROG - ILO MATES</title>

    <!-- Custom CSS & Fonts -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rubik+One&display=swap" rel="stylesheet">
</head>
<body>
    <form action="order.php"  method="POST">
        <label for="kode">Kode Makanan:</label>
        <input type="text" id="KodeMakanan" name="KodeMakanan" required>

        <label for="makanan">Makanan:</label>
        <input type="text" id="Makanan" name="Makanan" required>

        <label for="harga">Harga Makanan:</label>
        <input type="text" id="harga" name="harga" required>

        <label for="foto">Foto Makanan:</label>
        <input type="file" id="foto" name="foto" accept="image/jpeg, image/png" require>

        <button type="submit">Submit</button>
    </form>
</body>
</html>