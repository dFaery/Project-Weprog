<?php
// event handler for btn Submit
if (isset($_POST['submit'])) {
    // Get the value for each variable
    $text_align = $_POST['text-align'];
    $font_family = $_POST['font-family'];
    $color = $_POST['color'];

    // Make cookies, can use JSON?
    setcookie("text-align", $text_align, time() + 180);
    setcookie("font-family", $font_family, time() + 180);
    setcookie("color", $color, time() + 180);

    // auto refresh page when form submitted
    header("Refresh:0");    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>

<body>
    <!-- going back to index.php using input:submit -->
    <form action="index.php" method="POST">
        <h1>Halaman Setting</h1>
        <div>
            <!-- text-align value -->
            <label for="text-align">Text-Align: </label>
            <select name="text-align" id="text-align">
                <option value="">

                <!-- CHECK: if text-align cookie has been created, display text-align cookie to combobox -->
                <?php
                if(isset($_COOKIE['text-align']))
                    echo $_COOKIE['text-align'];
                else{
                    echo "-- Pilih Text-align --";
                }
                ?>

                </option>
                <option value="Left" >Left</option>
                <option value="Right" >Right</option>
                <option value="Center" >Center</option>
                <option value="Justify" >Justify</option>
            </select>
        </div>
        <br>
        <div>
            <!-- font-family value -->
            <label for="font-family">Font-Family: </label>
            <select name="font-family" id="font-family">
                <option value="">

                <!-- CHECK: if font-family cookie has been created, display font-family cookie to combobox -->
                <?php
                if(isset($_COOKIE['font-family']))
                echo $_COOKIE['font-family'];
            else{
                echo "-- Pilih font-family --";
            }
            ?>

</option>
<option value="Arial">Arial</option>
<option value="Tahoma">Tahoma</option>
<option value="Calibri">Calibri</option>
</select>
</div>

<br>
<div>
    <!-- color value -->
    <label for="color">Color: </label>
            <input type="color" name="color" id="color"
            value="<?php 

            // CHECK: if color cookie has been created, display color to input:color
                if(isset($_COOKIE['color'])){
                    echo $_COOKIE['color'];
                }else{
                    echo "#000000";
                }
            ?>">
        </div>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>

</body>

</html>