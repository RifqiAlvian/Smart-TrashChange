<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrashChange | CHAT</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

</head>

<body>

    <!-- navbar -->
    <header>
        <a href="<?php echo base_url(); ?>Home" class="logo">
            <img src="<?php echo base_url(); ?>assets/assets/logo-brand.png" alt="">
        </a>

        <ul class="navbar">
            <li><a href="<?php echo base_url(); ?>home"> Beranda</a></li>
            <li><a href="<?php echo base_url(); ?>Chat/index" class="active">Chat</a></li>
            <li><a href="<?php echo base_url(); ?>Kelolaakun/index">Kelola Akun</a></li>
            <li><a href="<?php echo base_url(); ?>Registration/Logout">Logout</a></li>
        </ul>
        <div class="logo2">
            <a href="#">
                <img src="<?php echo base_url(); ?>assets/assets/icon-navbar.png" alt="">
            </a>
        </div>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <!-- end -->

    <!-- main -->
    <main>
        <div class="container text-center">
            <p class="teks-pesanan">Notifikasi Saya</p>
        </div>
    </main>

    <!-- chat -->
    <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "9df1d65f-307b-4870-9456-c77ef60b06f4";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>

    <div class="konten-chat text-center">
        <img src="<?php echo base_url(); ?>View HTML/assets/image_chat_available.png">
        <p class="p1 mt-3">Chat Berada di Pojok Kanan Bawah</p>
        <p>Ayo Mulai Mengirim Pesan !</p>
    </div>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>