<?php
// Cek apakah tombol Simpan ditekan
if (isset($_POST['Simpan'])) {
    // Ambil data dari form
    $text_align = $_POST['text-align'];
    $font_family = $_POST['font-family'];
    $color = $_POST['color'];

    // Simpan ke dalam cookie selama 1 jam (3600 detik)
    setcookie("text-align", $text_align, time() + 3600);
    setcookie("font-family", $font_family, time() + 3600);
    setcookie("color", $color, time() + 3600);

    // Redirect ke halaman index
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setting</title>
</head>
<body>
    <h1>Halaman Setting</h1>
    <form action="setting.php" method="POST">
        <!-- Text-Align -->
        <label for="text-align">Text-Align:</label>
        <select name="text-align" id="text-align" required>
            <option value="">-- Pilih Text-align --</option>
            <option value="left">Left</option>
            <option value="right">Right</option>
            <option value="center">Center</option>
            <option value="justify">Justify</option>
        </select>
        <br><br>

        <!-- Font-Family -->
        <label for="font-family">Font-Family:</label>
        <select name="font-family" id="font-family" required>
            <option value="">-- Pilih Font --</option>
            <option value="Arial">Arial</option>
            <option value="Tahoma">Tahoma</option>
            <option value="Calibri">Calibri</option>
        </select>
        <br><br>

        <!-- Color -->
        <label for="color">Color:</label>
        <input type="color" name="color" id="color" value="#000000" required>
        <br><br>

        <input type="submit" name="Simpan" value="Simpan">
    </form>
</body>
</html>
