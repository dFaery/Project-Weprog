<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <style type="text/css">
        /* adjust text area width & height */
        textarea{
            width: 300px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Halaman Hasil</h1>

    <h4>Setting yang tersedia</h4><br>
    <textarea name="" id="">
        <!-- Display customized style to text area -->
        p{
            text-align: <?php echo $_COOKIE['text-align']?>; 
            font-family: <?php echo $_COOKIE['font-family']?>;
            color: <?php echo $_COOKIE['color']?>;
        }
    </textarea>
    <br>
    <!-- Go back to setting.php -->
    <a href="setting.php">Ganti Setting</a>

    <!-- dummy paragraph & using customize css from cookie -->
    <p style="text-align: <?php echo $_COOKIE['text-align']?>;
    font-family: <?php echo $_COOKIE['font-family']?>;
    color: <?php echo $_COOKIE['color']?>;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta maiores quasi et reiciendis voluptatem. Placeat officia aut tempore quas velit magnam reprehenderit dolores veritatis, fugiat culpa nisi ad sint laborum.</p>
</body>
</html>