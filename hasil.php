<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil</title>
    <style type="text/css">
        textarea {
            width: 300px;
            height: 100px;
        }

        <?php
        if (isset($_COOKIE['text-align'], $_COOKIE['font-family'], $_COOKIE['color'])) {
            $textAlign = htmlspecialchars($_COOKIE['text-align']);
            $fontFamily = htmlspecialchars($_COOKIE['font-family']);
            $color = htmlspecialchars($_COOKIE['color']);

            echo "
            .custom {
                text-align: $textAlign;
                font-family: '$fontFamily', sans-serif;
                color: $color;
            }
            ";
        } else {
            // fallback default style
            echo "
            .custom {
                text-align: left;
                font-family: Arial, sans-serif;
                color: black;
            }
            ";
        }
        ?>
    </style>
</head>
<body>
    <h1>Halaman Hasil</h1>

    <h4>Setting yang tersedia</h4><br>
    <textarea readonly>
p {
    text-align: <?php echo $_COOKIE['text-align'] ?? 'left'; ?>;
    font-family: <?php echo $_COOKIE['font-family'] ?? 'Arial'; ?>;
    color: <?php echo $_COOKIE['color'] ?? '#000000'; ?>;
}
    </textarea>
    <br>
    <a href="setting.php">Ganti Setting</a>

    <p class="custom">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo porro iusto explicabo voluptates provident vitae accusamus mollitia non similique quis molestiae, modi alias architecto facere recusandae! Iste repudiandae quaerat sint!
    Exercitationem quidem inventore quas quo sequi porro aperiam, quia aspernatur est ab reprehenderit ducimus expedita vitae et sit nesciunt, dolor voluptatem eum ea sapiente explicabo temporibus in reiciendis. Quidem, blanditiis.
    Similique, in perferendis! Ullam numquam totam laudantium deserunt aperiam eum dicta recusandae ea, repellat accusamus reprehenderit quis veniam possimus quod quisquam quos earum culpa. Repellat pariatur rerum sapiente! Incidunt, accusantium?
    Eum necessitatibus, assumenda, cum nobis maxime dolorum laboriosam asperiores rerum beatae, amet dignissimos. Dicta dolorum cumque, culpa cum at eveniet tempore eos, sequi illum accusamus nesciunt rem nobis modi magnam.
    Hic, consequuntur voluptates similique recusandae, maiores iusto doloribus mollitia a quas, sunt necessitatibus. Labore nihil accusamus aperiam aspernatur. Error maxime sint vel, aliquam vero quidem harum incidunt sapiente repellendus molestiae.
    </p>
</body>
</html>
