<?php
    
    //echo "Hello World,I'm back";

    //membuat variable
    $nama = "Jamaluddin";
    $jurusan = "teknik informatika";
    $angkatan = 2023;
    
    //output
    echo "Nama saya adalah: " . $nama;
    
?>    

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
</head>
<body>
    <h2><?php echo $angkatan; ?></h2>
    <p>
        Saya kuliah di jurusan <?= $jurusan; ?>
    </p>    
    
</body>
</html>