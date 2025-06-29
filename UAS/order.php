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

    //jika isDuplicate == false
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
            <!-- card makanan -->
            <?php
            // Periksa jika session 'data' tidak kosong.
            if (isset($_SESSION['data'])) {
                // Loop melalui setiap item di session 'data' untuk menampilkannya.
                // Menggunakan '$item' sebagai nama variabel lebih deskriptif daripada '$key'.
                foreach ($_SESSION['data'] as $key) {
                    // Setiap item makanan dibungkus dalam div dengan class 'card'.
                    echo '<div class="card">';
                    // Tampilkan gambar. 'alt' penting untuk aksesibilitas dan SEO.
                    echo '<img src="' . $key['foto'] . '" alt="">';
                    // Tampilkan nama makanan.
                    echo '<div>' . $key['makanan'] . '</div>';
                    
                    echo '<div>Rp. ' . $key['harga'] . '</div>';
                    
                    echo '<button type="submit" value="Pilih" class="btn-pilih-makanan" 
                    data-nama="' . $key['makanan'] . '" 
                    data-harga="' . $key['harga'] . '"
                    data-kode="' . $key['kodeMakanan'] .'
                    disabled=false">Pilih</button>';
                    
                    echo '</div>';
                }
            } else {                
                echo '<p>Belum ada data makanan</p>';
            }
            ?>
        </div>
    </div>

    <div class="sidebar">
        <h3 style="font-weight: 100;">Pilihanku:</h3>
        <ul id="selected-items">
        </ul>
        <div class="total">
            Total: Rp <span id="total-harga">0</span>
        </div>
    </div>

    <script src="jquery-3.5.1.min.js"></script>
    <script>        
        // Memastikan script ini berjalan HANYA SETELAH seluruh halaman HTML selesai dimuat.
        $(document).ready(function() {
            
            let totalHarga = 0;

            //menyimpan kode makanan yang dipilih
            const cart = [];

            $(".btn-pilih-makanan").click(function() {                                              
                //Dari card yang dipilih, cari nama makanan dan harganya
                //pakai cara yang diajarin di kelas
                const kodeMakanan = $(this).attr('data-kode');
                const namaMakanan = $(this).attr('data-nama');
                const hargaMakanan = parseInt($(this).attr('data-harga'));    

                //atau bisa juga pakai .data() --> ini ambil attribute dengan nama data-...
                //kalau attributenya adalah int yang solid, maka variable yang menggunakan .data() akan langsung menyimpan int tanpa perlu parseInt()                
                // const kodeMakanan = $(this).data('kode');
                // const namaMakanan = $(this).data('nama');
                // const hargaMakanan = $(this).data('harga');     
                                
                //cek apakah di cart ada kodeMakanan yang dipilih
                if (!cart[kodeMakanan]) {
                    // Jika belum ada, buat data baru di cart
                    cart[kodeMakanan] = {
                        nama: namaMakanan,
                        harga: hargaMakanan                        
                    };
                    //tambah list baru di section sidebar
                    //toLocaleString  ngeformat angka menjadi format tertentu --> disini format ke rupiah 
                    $("#selected-items").append('<li data-nama="' + namaMakanan + '">' + namaMakanan + ' (Rp. ' + hargaMakanan.toLocaleString('id-ID')+ ')');
                }                
                                
                //hitung total harganya
                totalHarga += hargaMakanan;

                //ketika button submit diklik, maka gabisa diklik lagi
                $(this).attr('disabled', true);
                $(this).html("Terpilih")
                $(this).css({
                    'background-color':'#7B7B7C',
                    'cursor':'not-allowed'
                });

                //Buat update tampilan total harga                                
                //toLocaleString  ngeformat angka menjadi format tertentu --> disini format ke rupiah                
                $("#total-harga").html(totalHarga.toLocaleString('id-ID'));

            });
        });        
    </script>
</body>

</html>