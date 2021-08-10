<!DOCTYPE html>
<html>

<head>
    <title>Latihan 6</title>
</head>

<body>
    <form action="" method="POST">
        Pilih Makanan yang kamu suka dibawah ini : <br>
        <input type="checkbox" name="makanan[]" value="Mie Ayam"> Mie Ayam<br>
        <input type="checkbox" name="makanan[]" value="Bakso"> Bakso<br>
        <input type="checkbox" name="makanan[]" value="Nasi Goreng"> Nasi Goreng<br>
        <input type="checkbox" name="makanan[]" value="Mie Goreng"> Mie Goreng<br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['makanan'])) {
        $makanan = $_POST['makanan'];
        echo "<br>";
        for ($i = 0; $i < count($makanan); $i++) {
            echo $makanan[$i] . "<br>";
        }
    }
    ?>
</body>

</html>