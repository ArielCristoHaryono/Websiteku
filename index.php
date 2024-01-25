<!DOCTYPE html>
<html>
<head>
    <title>personal-website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Navigasi -->
<div class="navigasi">
    <div class="profile">
        <h2>Personal Website</h2>
    </div>

    <div class="menu">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#pendidikan">Pendidikan</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>
</div>


<!-- Banner -->
<div class="banner" id="about">
    <img src="profil.jpg" alt="foto profil">
    <h1>Halo...  <span></span></h1>
    <p>Salam Kenal Semuanya 🤣🤣🤣</p>
    <a href="#portofolio"><button>Selengkapnya</button></a>
</div>


<!-- Riwayat Pendidikan -->
<br id="pendidikan"><br><br><br>
<div class="box-pendidikan">
    <h1>Riwayat Pendidikan</h1>
    <div class="box-kiri">
        <img src="sd-icon.png" alt="gmbr SD" style: width="80%" height="50%;">
        <p><h3>Sekolah Dasar</h3></p>
        <p>Saya menempuh pendikan dasar di Sekolah SD Citra Berkat Surabaya</p>
    </div>

    <div class="box-tengah">
        <img src="smp-icon.png" alt="gmbr SMP" style: width="50%" height="50%;">
        <p><h3>Sekolah Menengah Pertama</h3></p>
        <p>Saya menempuh pendikan menengah pertama di Sekolah SMP Citra Berkat Surabaya</p>
    </div>

    <div class="box-kanan">
        <img src="sma-icon.png" alt="gmbr SMA" style: width="60%" height="50%;">
        <p><h3>Sekolah Menengah Atas</h3></p>
        <p>Saya menempuh pendikan menengah atas di Sekolah SMA Citra Berkat Surabaya</p>
    </div>
</div>


<!-- Portofolio -->
<div class="box-portofolio">
    <br id="portofolio"><br><br><br><br>
    <h1>Portofolio</h1>
    <div class="box-kiri">
        <img src="portofolio-1.jpg" alt="gmbr porto1" style: width="50%" height="50%;">
        <p><h3>Panitia Oweek</h3></p>
        <?php 
         echo "Memiliki pengalaman menjadi panitia oweek divisi FnD (Food and Nutrition Department) pada tahun 2022";
        ?>
    </div>

    <div class="box-tengah">
        <img src="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-FIX-SEP-2021-01.png" alt="gmbr porto2" style: width="50%" height="50%;">
        <p><h3>Mahasiswa Universitas Ciputra</h3></p>
        <p>Merupakan mahasiswa aktif Universitas Informatic system for Business (ISB) angkatan 2021</p>
    </div>

    <div class="box-kanan">
        <img src="portofolio-3.png" alt="gmbr porto3" style: width="50%" height="50%;">
        <p><h3>Hobby</h3></p>
        <p>Saya sangat senang dengan D.I.Y, kelistrikan, "ngoprek", nyolder, merawat hewan & tanaman</p>
    </div>


<!-- Kontak -->
<div class="box-kontak">
    <h1>Klik Icon Untuk Hubungi Saya</h1>
    <br id="kontak">
    <a href="https://wa.me/+6282132805656?text=Halo%20Ariel%2C%20saya%20mendapat%20nomor%20ini%20dari%20website%20anda%20"><img src="whatsapp-icon.png" alt="gmbr icon whatsapp"></a>
    <h2>Ariel Cristo Haryono</h2> 
</div>


<div class="footer">
    <p>Copyright : Ariel Cristo Haryono | NIM : 0706022110032</p>
</div>

</body>
</html>