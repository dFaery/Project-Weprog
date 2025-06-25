<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS WEBPROG - ILO MATES</title>

    <!-- Custom CSS & Fonts -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Rubik+One&display=swap" rel="stylesheet">

    <style>
        .error {
            color: red;
            font-size: 0.8em;
            margin-top: 5px;
        }
        .warning-box {
            padding: 10px;
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
            border-radius: 4px;
            margin-bottom: 15px;
            display: none;
        }
    </style>
</head>

<body>
     <div class="form-container">
        <form action="order.php" method="POST" >
            <label for="kodeMakanan">Kode Makanan:</label>
            <input type="text" id="kodeMakanan" name="kodeMakanan" >
            <br>

            <label for="makanan">Makanan:</label>
            <input type="text" id="makanan" name="makanan" >
            <br>

            <label for="harga">Harga Makanan:</label>
            <input type="number" id="harga" name="harga" >
            <br>

            <label for="foto">URL Foto Makanan:</label>
            <input type="url" id="foto" name="foto" >
            <br>

            <input type="submit" name="submit" id="submit-makanan">
            <input type="submit" name="lihat_list_makanan" value="Lihat List Makanan">                        
        </form>
    </div>
   
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $("#submit-makanan").click(function(){
            var kodeMakanan = $("#kodeMakanan").val();
            var namaMakanan = $("#makanan").val();
            var hargaMakanan = parseInt($("#harga").val());
            var foto = $("#foto").val();
            
            alert("Berhasil menambahkan "+namaMakanan);
        })
    </script>
</body>

</html>