<?php
if (isset($_POST['Simpan'])) {
    // Validasi input
    if (move_uploaded_file($_FILES['photo']['tmp_name'], "foto/" . $_FILES['photo']['name'])) {
        $tujuan = "foto/" . $_FILES['photo']['name'];
        session_start();
        // Simpan data ke session
        $_SESSION['KodeMakanan'] = $_POST['KodeMakanan'];
        $_SESSION['Makanan'] = $_POST['Makanan'];
        $_SESSION['harga'] = $_POST['harga'];
        $_SESSION['foto'] = $_FILES['foto'];
    } else {
        echo "Gagal mengupload foto.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewportF" content="width=device-width, initial-scale=1.0">
    <title>PROSES UAS WEBPROG - ILO MATES</title>

    <!-- Custom CSS & Fonts -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rubik+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="menu">
            <!-- Card Makanan -->
            <div class="card">
                <?php
                echo "<img src='$tujuan' width='200px'>";
                ?>
                <div><?php echo $_POST['Makanan']; ?></div>
                <div>Rp. <?php echo $_POST['harga']; ?></div>
                <button>Pilih</button>
            </div>
            <div class="card">
                <?php
                echo "<img src='$tujuan' width='200px'>";
                ?>
                <div><?php echo $_POST['Makanan']; ?></div>
                <div>Rp. <?php echo $_POST['harga']; ?></div>
                <button>Pilih</button>
            </div>
            <div class="card">
                <?php
                echo "<img src='$tujuan' width='200px'>";
                ?>
                <div><?php echo $_POST['Makanan']; ?></div>
                <div>Rp. <?php echo $_POST['harga']; ?></div>
                <button>Pilih</button>
            </div>
            <div class="card">
                <?php
                echo "<img src='$tujuan' width='200px'>";
                ?>
                <div><?php echo $_POST['Makanan']; ?></div>
                <div>Rp. <?php echo $_POST['harga']; ?></div>
                <button>Pilih</button>
            </div>
            <div class="card">
                <?php
                echo "<img src='$tujuan' width='200px'>";
                ?>
                <div><?php echo $_POST['Makanan']; ?></div>
                <div>Rp. <?php echo $_POST['harga']; ?></div>
                <button>Pilih</button>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <h3>Pilihanku:</h3>
        <!-- Daftar pilihan akan ditambahkan di sini -->
    </div>
    </div>
</body>

</html>

</body>

</html>