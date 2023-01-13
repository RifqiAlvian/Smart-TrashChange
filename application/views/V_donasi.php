<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrashChange | Donasi</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>

    <!-- navbar -->
    <header>
        <a href="<?php echo base_url() ?>Home" class="logo">
            <img src="<?php echo base_url() ?>assets/assets/logo-brand.png" alt="">
        </a>

        <ul class="navbar">

            <li><a href="<?php echo base_url(); ?>home"> Beranda</a></li>
            <li><a href="<?php echo base_url(); ?>Chat/index">Chat</a></li>
            <li><a href="<?php echo base_url(); ?>Kelolaakun/index">Kelola Akun</a></li>
            <li><a href="<?php echo base_url(); ?>Registration/Logout">Logout</a></li>
        </ul>
        <div class="logo2">
            <a href="#">
                <img src="<?php echo base_url() ?>assets/assets/icon-navbar.png" alt="">
            </a>
        </div>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <!-- end -->

    <!-- main -->
    <main>

        <div class="container text-center">
            <p class="teks-pesanan">
                <a href="<?php echo base_url(); ?>home">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </a>
                Donasi
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image"><img src="https://img.icons8.com/color/96/000000/meeting.png" /></div>
                    <h6 class="mt-3 text-center">Tc Donasi</h6>
                    <p>Rela Mengelola Sampah Demi Kebahagiaan Bersama <br>
                        Tc Donasi Untuk Mendukung Keluarga Lebih Sehat dan Bahagia </p>
                </div>

                <div class="col-md-8 mt-5">
                    <form class="information" method="POST" action="Donasi/donasi">
                        <h4 class="form-heading">Selamat Datang Orang Baik :)</h4>
                        <p class="form-para">
                            Terima kasih kalian yang telah rela mendonasikan Tc Point anda ke orang yang anda pilih,
                            semoga apa yang kamu berikan bisa kembali dengan lebih baik lagi.
                        </p>

                        <div class="input-group mt-4">
                            <input type="text" name="Username" class="input" required id="name" value="<?php echo $this->session->userdata('Username'); ?>" />
                            <label for="name" class="input-label">Masukkan Nama</label>
                        </div>

                        <div class="input-group mt-4">
                            <input type="text" name="TcPoints" class="input" required id="TcPoints" value="<?php echo $this->session->userdata('TcPoints'); ?>" />
                            <label for="jumlah" class="input-label">Jumlah</label>
                        </div>

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-outline-success">
                                <span>Kirim Donasi &nbsp;<i class="fas fa-arrow-right"></i></span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- end -->

    <!-- footer -->
    <footer>

        <div id="container">
            <div class="main-content">
                <div class="logo-footer">
                    <img src="<?php echo base_url(); ?>assets/assets/logo.png" alt="">
                </div>
                <div class="left box">
                    <h2>About us</h2>
                    <div class="content">
                        <p>TrashChange merupakan sebuah aplikasi sederhana yang digunakan untuk proses menukar sampah
                            menjadi bahan pokok atau sebagainya.</p>
                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>

                <div class="center1 box">
                    <h2>Link Terkait</h2>
                    <div class="content">
                        <div class="list-link">
                            <li><a href="<?php echo base_url(); ?>Home">Beranda</a></li>
                            <li><a href="<?php echo base_url(); ?>Chat/index">chat</a></li>
                            <li><a href="<?php echo base_url(); ?>Kelolaakun/index">kelola Akun</a></li>
                            <li><a href="<?php echo base_url(); ?>Registration/Logout">LogOut</a></li>
                        </div>
                    </div>
                </div>

                <div class="center box">
                    <h2>Kelompok 10</h2>
                    <div class="content">
                        <div class="list-link">
                            <a href="#">Pandu Ali W (20081010230)</a><br>
                            <a href="#">Hanif Nur F (20081010231)</a><br>
                            <a href="#">Ikhasanul A (20081010238)</a><br>
                            <a href="#">Rifqi Alvian A (20081010239)</a><br>
                            <a href="#">Desya Ristya P (20081010240)</a><br>
                            <a href="#">Alfian Dorif M (20081010251)</a><br>
                        </div>
                    </div>
                </div>

                <div class="center box">
                    <h2>Hubungi Kami</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Gunung Anyar, SUB, Jawa Timur</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+089-123456789</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">Kelompok10@example.com</span>
                        </div>
                    </div>
                </div>


            </div>

            <div class="bottom">
                <center>
                    <span class="credit">Created By Kelompok 10 </a> | </span>
                    <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
                </center>
            </div>

        </div>
    </footer>
    <!-- end -->


    <!--js link--->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>