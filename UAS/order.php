<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input
    if (empty($_POST['KodeMakanan']) || empty($_POST['Makanan']) || empty($_POST['harga']) || empty($_FILES['foto']['name'])) {
        echo "Semua field harus diisi.";
        exit;
    }elseif (!is_numeric($_POST['harga'])) {
        echo "Harga harus berupa angka.";
        exit;
    } elseif ($_FILES['foto']['error'] !== UPLOAD_ERR_OK) {
        echo "Gagal mengupload foto.";
        exit;
    }
    // Proses upload foto
    $foto = $_FILES['foto'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewportF" content="width=device-width, initial-scale=1.0">
    <title>PROSES UAS WEBPROG - ILO MATES</title>

    <!-- Custom CSS & Fonts -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Rubik+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="menu">
            <!-- Card Makanan -->
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<div class='card'>";
                echo "<img src='https://via.placeholder.com/200' alt='Makanan'>";
                echo "<div>Makanan " . ($i + 1) . "</div>";
                echo "<div>Rp. " . (10000 * ($i + 1)) . "</div>";
                echo "<button>Pilih</button>";
                echo "</div>";
            }
            ?>
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