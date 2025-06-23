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
        echo"URL Foto Makanan kosong.";
        exit();
    }

    $arrayData = array(
        'kodeMakanan' => $_POST['kodeMakanan'],
        'makanan' => $_POST['makanan'],
        'harga' => $_POST['harga'],
        'foto' => $_POST['foto']
    );
    $_SESSION['data'][] = $arrayData;

    $listfinal = $_SESSION['data'];
    
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
            foreach ($listfinal as $key){
            ?>
                <div class="card">
                    <img src="<?php echo $key['foto'];?>" alt="">
                    <div><?php echo $key['makanan']; ?></div>
                    <div>Rp. <?php echo $key['harga']; ?></div>
                    <button>Pilih</button>
                </div>
            <?php }?>
        </div>
    </div>

    <div class="sidebar">
        <h3>Pilihanku:</h3>
        <!-- Daftar pilihan akan ditambahkan di sini -->
    </div>
    </div>
</body>

</html>
