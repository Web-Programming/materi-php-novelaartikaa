<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>Welcome to my First website with PHP</h1>"; ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempore quasi tempora velit doloribus optio, repudiandae cumque ea quae saepe, fugiat facere error repellendus itaque nulla alias quo reprehenderit voluptatibus!</p>
    <p>My name is <?php echo "<b>Novela Artika</b>";?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
    $nama = "Novela Artika"; //string
    $umur = 20; //number
    $Laki_laki = true; //boolean
    $saldo = 1000; //null
    $hobby =  ["membaca novel", "Berenang", "main bulu tangkis"]; //array
    $makanan_fav = array ("tekwan","bakso","seblak");//array
    #ini juga komentar

    //variabel statis
    const PI = 3.14;
    echo "Nilai PI = ". PI;
    echo "<br/>";
    echo "umur = $umur";
    echo "<br/>";   

    //echo "Hobi 1. $hobby [0]";

    //menampilkan nilai seluruhnya atau array
    foreach ($hobby as $key => $value) {
        echo "Hobi ".($key+1)." = $value <br/>";
    }

    // echo "Hobi saya: " . implode(", ", $hobby); 

    $saldo = 10000; //dolar
    //tampilkan symbol dolar ($) menggunakan echo
    echo "saldo = $$saldo USD"; 

?>

</body>
</html>