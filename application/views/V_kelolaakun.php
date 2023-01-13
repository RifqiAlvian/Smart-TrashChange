<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrashChange | AKUN</title>
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
            <li><a href="<?php echo base_url(); ?>Chat/index">Chat</a></li>
            <li><a href="<?php echo base_url(); ?>Kelolaakun/index" class="active">Kelola Akun</a></li>
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

    <!-- main start -->
    <main>
        <div class="container text-center">
            <p class="teks-pesanan">Akun Saya</p>
        </div>

        <div class="container mt-5">
            <div class="row">

                <!-- name account -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-akun" src="<?php echo base_url(); ?>assets/assets/img-akun.png">
                            <p>Selamat Datang Di TrashChange</p>
                            <h3><?php echo $this->session->userdata('Username'); ?></h3>


                            <div class="card w-75">
                                <div class="card-body2">
                                    <img src="<?php echo base_url(); ?>assets/assets/tc-poin.png" alt="">
                                    <span> Tc Points : <?php echo $this->session->userdata('TcPoints'); ?></span>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- right content -->
                <div class="col-sm-6">
                    <h5>Ubah Data Diri</h5>
                    <div class="card">
                        <div class="card-header">
                            <a href="kelola_akun.html" class="active teks-datadiri1">
                                Biodata Diri
                            </a>
                        </div>
                        <div class="container">
                            <div class="card-body1">
                                <form class="row g-3" method="POST"
                                    action="<?php echo base_url(); ?>Pelanggan/update_pelanggan">
                                    <div class="col-md-6 mt-5">
                                        <label for="nama_depan" class="form-label">ID ACCOUNT</label>
                                        <input type="nama_depan" class="form-control" name="id_Account"
                                            id="inputnama_depan"
                                            value="<?php echo $this->session->userdata('id_Account'); ?>" readonly>
                                    </div>
                                    <div class="col-md-6 mt-5">
                                        <label for="nama_depan" class="form-label">Nama Depan</label>
                                        <input type="nama_depan" class="form-control" name="namadepan"
                                            id="inputnama_depan"
                                            value="<?php echo $this->session->userdata('namadepan'); ?>">
                                    </div>
                                    <div class="col-md-6 mt-5">
                                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                        <input type="nama_belakang" class="form-control" name="namabelakang"
                                            id="inputnama_belakang"
                                            value="<?php echo $this->session->userdata('namabelakang'); ?>">
                                    </div>

                                    <div class="col-md-6 mt-5">
                                        <label for="nama_belakang" class="form-label">Jenis Kelamin (L/P)</label>
                                        <input type="nama_belakang" class="form-control" name="jeniskelamin"
                                            id="inputnama_belakang"
                                            value="<?php echo $this->session->userdata('jeniskelamin'); ?>">
                                    </div>
                                    <div>
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="Email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="example@gmail.com"
                                            value="<?php echo $this->session->userdata('Email'); ?>">
                                    </div>
                                    <div>
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="Sandi"
                                            id="exampleInputPassword1" placeholder="***********"
                                            value="<?php echo $this->session->userdata('Sandi'); ?>">
                                    </div>
                                    <div>
                                        <label for="exampleInputnumber" class="form-label">No Telepon</label>
                                        <input type="text" class="form-control" name="notelepon" id="exampleInputnumber"
                                            placeholder="08xxxxxxxx"
                                            value="<?php echo $this->session->userdata('notelepon'); ?>">
                                    </div>

                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <input class="form-control" name="alamat" id="exampleFormControlTextarea1"
                                            rows="4" placeholder="Masukkan Alamat"
                                            value="<?php echo $this->session->userdata('alamat'); ?>"></input>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-outline-success w-100">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="panduan mt-5">
                    <a href="<?php echo base_url() ?>Guidance">
                        <button type="submit" class="btn btn-outline-success w-25">Lihat Panduan</button>
                    </a>
                </div>

                <div class="text-exit">
                    <i class='bx bx-exit'>
                        <a href="<?php echo base_url() ?>Registration/logout">Keluar</a>
                    </i>
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
    <!-- End Footer -->

    <!--js link--->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>