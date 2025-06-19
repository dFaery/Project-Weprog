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
            <input type="text" id="kodeMakanan" name="KodeMakanan" required>
            <br>
    
            <label for="Makanan">Makanan:</label>
            <input type="text" id="Makanan" name="Makanan" required>
            <br>
    
            <label for="harga">Harga Makanan:</label>
            <input type="text" id="harga" name="harga" required>
            <br>
    
            <label for="foto">URL Foto Makanan:</label>
            <input type="text" id="foto" name="foto" required>
            <br>
    
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="jquery.js"></script>
</body>

</html>