<!-- M. Imam Sutria 1511521023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas M09b</title>
</head>
<body>
    <h2>Mesin Pencari Faktor Bilangan</h2>

    <!-- TODO 1: Tambahkan atribut form ini sehingga data dikirim ke file ini dengan method POST -->

    <form method="POST" action="index.php">
        Bilangan:
        <!-- TODO 2: Tambahkan input berupa text bernama `bilangan` -->
        <input type= "text" name="bilangan">
        <button type="submit" name="tombol">Kirim</button>
    </form>

    <?php
        //TODO 3 : Lakukang pencarian faktor bilangan disini dan tampilkan 
        if(isset($_POST['tombol']))
        {
            $bil=$_POST['bilangan'];
            $fakbil=1;
            
            while ($fakbil<=$bil) 
            {
                if ($bil % $fakbil==0) 
                {
                    $faktor = $fakbil;
                    echo "- Faktor bilangan: ".$bil." yaitu ".$faktor."<br>";
                }
                $fakbil++;
            }
        }
    ?>
</body>
</html>