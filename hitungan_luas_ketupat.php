<html>
<style>
    body{
        font-family: sans-serif;
        background-color: #CFF5E7;
    }
    .phpe{
        font-size: 20px;
        background-color: #A5F1E9;
        padding: 20px;
        margin-top: 20px;
        border-radius: 20px;
    }
    P{  padding-top: -20px;
        font-size: 20px;
        font-weight: bold;
    }
    .container{
        justify-content: center;
        font-size: 30px;
        background-color: #7FE9DE;
        padding: 40px;
        margin-left: 500px;
        margin-right: 550px;
        border-radius: 20px;
        border-color: 150px black;
    }
</style>
<head>
    <title>HITUNG luas</title>
</head>
<body>
    <h1 style="text-align: center; padding: 50px; font-size: 50px;">HITUNG LUAS BELAH KETUPAT</h1>
<div class="container">
    <h2>Masukkan Nilai :</h2>
    <form action="hitungan_luas_ketupat.php" method="POST" enctype="multipart/form-data">
        <div>
            <p>Diagonal 1</p>
            <hr style="margin-top: -10px; margin-right: 5px;">
            <input type="text" name="d1" placeholder="Masukkan nilai" required style="width: 250px; height: 50px; font-size: 20px; text-align: center;border-radius: 20px; font-weight: bold;">
        </div>
        <div>
            <p>Diagonal 2</p>
            <hr style="margin-top: -10px; margin-right: 5px;">
            <input type="text" name="d2" placeholder="Masukkan nilai " required style="width: 250px; height: 50px; font-size: 20px; text-align: center;border-radius: 20px; font-weight: bold;">
        </div>
        <div>
            <input type="submit" name="submit" value="Hitung" style="margin-top: 20px; background-color: #CFF5E7; width: 100px; height: 30px; border-radius: 20px;">
        </div><div class="phpe">
            <p>Hasil :</p>
    
    <?php
    error_reporting(0);
        if(isset($_POST['submit'])){
            $d1    =$_POST['d1'];
            $d2    =$_POST['d2'];
            // menghitung luas belah ketupat
            $keliling_dketupat = 0.5 * $d1 * $d2;
            echo "Hasil hitung luas belah ketupat adalah sebagai berikut :<br />";
            echo "Diketahui :<br />";
            echo "Diagonal 1 = $d1<br />";
            echo "Diagonal 2 = $d2<br />";
            echo "<br>";
            echo "Maka luas belah ketupat sama dengan 1/2 x $d1 x $d2 = $keliling_dketupat cm²";
        }

    ?>

        </form></div><div>
            <form action="index_pilihan.php" method="POST" enctype="multipart/form-data">
            <input type="submit" name="submit" value="Kembali ke halaman utama" style="margin-top: 20px; background-color: #CFF5E7; font-size: 20px; width: 440px; height: 50px; border-radius: 20px; margin-left: 220px;">
        </div></div>
</body>
</html>