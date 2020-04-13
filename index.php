<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/fontawesome/css/all.min.css">
    <link href="image/buku.png" rel="shortcut icon" />
    <title>Anwarsyah / IF4-15</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="index.php"><span class="fa fa-user mr-2"></span> SPK / SAW/ ANWARSYAH</a>
</nav>
<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-light pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-dark" href="index.php"><span class="fas fa-home"></span> Home</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=bobot"><span class="fa fa-bomb"></span> Bobot & Kriteria</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=data"><span class="fa fa-book"></span> Data</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=proses"><span class="fa fa-book"></span> Proses SAW</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=hasil"><span class="fa fa-book-medical"></span> Hasil Perengkingan</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=about_saw"><span class="fa fa-search"></span> SPK & SAW</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=about_adm"><span class="fa fa-user"></span> Administrator</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?p=logout-adm" onclick=" return confirm ('Apakah Anda Yakin Meninggalkan Halaman Administrator,?')"><span class="fas fa-sign-out-alt"></span> Sign Out</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>
    <div class="col-md-10 p-4 pt-2">
        <?php
        if(isset($_GET['p'])){
            $file = 'saw/'.$_GET['p'].'.php';
            if (file_exists($file)){
                include "$file";
            }else{
                include "saw/Error404.php";
            }
        }else{
            include "saw/home.php";
        }
        ?>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="style/jquery/jquery.min.js"></script>
<script src="style/js/bootstrap.bundle.min.js"></script>
</body>
</html>
