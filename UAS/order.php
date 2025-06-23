<?php
session_start();
if (isset($_POST['submit'])) {
    // Validasi input
    if (empty($_POST['kodeMakanan'])) {
        echo "Kode Makanan tidak boleh kosong.";
        exit();
    }
    if (empty($_POST['makanan'])) {
        echo "Nama Makanan tidak boleh kosong.";
        exit();
    }
    if (empty($_POST['harga']) || !is_numeric($_POST['harga'])) {
        echo "Harga Makanan harus berupa angka.";
        exit();
    }
    if (empty($_POST['foto'])) {
        echo "URL Foto Makanan kosong.";
        exit();
    }

    // Cek duplikasi berdasarkan kodeMakanan
    $isDuplicate = false;
    if (isset($_SESSION['data'])) {
        foreach ($_SESSION['data'] as $item) {
            if ($item['kodeMakanan'] === $_POST['kodeMakanan']) {
                $isDuplicate = true;
                break;
            }
        }
    }

    if (!$isDuplicate) {
        $arrayData = array(
            'kodeMakanan' => $_POST['kodeMakanan'],
            'makanan' => $_POST['makanan'],
            'harga' => $_POST['harga'],
            'foto' => $_POST['foto']
        );
        $_SESSION['data'][] = $arrayData;

        // Redirect untuk hindari duplikasi saat refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Makanan dengan kode ini sudah ada";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROSES UAS WEBPROG - ILO MATES</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Rubik+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="menu">
            <!-- Card Makanan -->
            <?php
            if (isset($_SESSION['data']) && !empty($_SESSION['data'])) {
                foreach ($_SESSION['data'] as $key) {
                    echo '<div class="card">';
                    echo '<img src="' . $key['foto'] . '" alt="">';
                    echo '<div>' . $key['makanan'] . '</div>';
                    echo '<div>Rp. ' . $key['harga'] . '</div>';
                    echo '<input type="submit" name="Pilih">';
                    echo '</div>';
                }
            } else {
                echo '<p>Belum ada data makanan</p>';
            }
            ?>
        </div>
    </div>

    <div class="sidebar">
        <h3>Pilihanku:</h3>
        <div id="selected-items">
            <!-- Item yang dipilih akan muncul di sini -->
        </div>
        <div class="total">
            Total: Rp <span id="total-harga">0</span>
        </div>
    </div>
</body>

</html>