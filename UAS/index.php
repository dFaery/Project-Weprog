<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS WEBPROG - ILO MATES</title>

    <!-- Custom CSS & Fonts -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Rubik+One&display=swap" rel="stylesheet">
</head>

<body>
     <div class="form-container">
        <form action="order.php" method="POST" enctype="multipart/form-data">
            <label for="kodeMakanan">Kode Makanan:</label>
            <input type="text" id="kodeMakanan" name="kodeMakanan" required>
            <br>

            <label for="makanan">Makanan:</label>
            <input type="text" id="makanan" name="makanan" required>
            <br>

            <label for="harga">Harga Makanan:</label>
            <input type="number" id="harga" name="harga" required>
            <br>

            <label for="foto">URL Foto Makanan:</label>
            <input type="url" id="foto" name="foto" required>
            <br>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="jquery.js"></script>
</body>

</html>