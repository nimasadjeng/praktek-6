<html>
    <head>
        <title> Pemrograman PHP dengan Array </title>
    </head>
    <body>
        <?php
        //penulisan array dapat dibuat seperti berikut
        $nama[] = "Nimas Adjeng";
        $nama[] = "Nutfa";
        $nama[] = "Rabbaanii";
        echo $nama[1] . $nama[2] . $nama[0];
        echo "<br>";
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>