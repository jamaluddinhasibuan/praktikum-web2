<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Mahasiswa</h1>
        <form method="POST" action="daftar_mhs.php">
        
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-4">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
            <label for="mk" class="col-4 col-form-label">Pilih Matkul</label>
                <div class="col-4">
                    <select id="mk" name="mk" class="custom-select">
                        <option value="Data Warehouse">Data Warehouse</option>
                        <option value="Statiska">Statiska</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-4">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-4">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        </div>

    <!-- Optional JavaScript; choose 1 of the 2! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
        if (isset($_POST["submit"])) {
            require_once "class_mhs.php";

            // Set nilai properti pada objek dari nilai yang diisi pada form

            $nim = $_POST["nim"];
            $mk = $_POST["mk"];
            $nilai = $_POST["nilai"];

						// Buat objek baru dari class bmiPasien
            $mahasiswa1 = new NilaiMahasiswa($nim, $mk, $nilai);
            
            echo "<p>nim: " . $mahasiswa1->nim . " </p>";
            echo "<p>mk: " . $mahasiswa1->mk . "</p>";
            echo "<p>mk: " . $mahasiswa1->nilai . "</p>";
            echo "<p>nilai: " . $mahasiswa1-> grade_nilai(). "</p>";
            echo "<p>nilai: " . $mahasiswa1-> hasil(). "</p>";
        }
        

        ?>