<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>
<body>
    <h1>Halaman Setting</h1>

    <div>
        <label for="text-align">Text-Align: </label>
        <select name="text-align" id="text-align">
            <option value="">-- Pilih Text-Align --</option>
            <option value="left">Left</option>
            <option value="right">Right</option>
            <option value="center">Center</option>
            <option value="justify">Justify</option>
        </select>
    </div>
    <br>
    <div>
        <label for="font-family">Font-Family: </label>
        <select name="font-family" id="font-family">
            <option value="">-- Pilih Font Family --</option>
            <option value="arial">Arial</option>
            <option value="tahoma">Tahoma</option>
            <option value="calibri">Calibri</option>
        </select>
    </div>
    
    <br>
    <div>
        <label for="color">Color: </label>
        <input type="color" name="color" id="color">
    </div>
    <br>
    <button type="submit">Simpan</button>
</body>
</html>