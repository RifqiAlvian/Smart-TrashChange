<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Admin</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- header -->
    <header>
        <div class="px-0 bg-light">
            <div class="d-flex">
                <div class="d-flex align-items-center " id="navbar">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true"
                        aria-label="Toggle navigation">

                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <span class="fas fa-bars ps-3"></span>
                    </button>
                    <a class="text-decoration-none fs14 ps-3" href="<?= site_url('homeadmin') ?>">ADMIN PAGE</a>
                </div>

                <div id="navbar2" class="d-flex justify-content-end pe-4">
                    <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </header>


    <main>

    </main>
    <div class="d-md-flex">
        <ul id="navbar-items" class="p-0">
            <li>
                <span class="fas fa-comment-alt"></span>
                <span class="ps-3 name"></span>
                <a href="<?= site_url('homeadmin') ?>" class="nav-link active">History Pemesanan</a>
            </li>
            <li>
                <i class="fas fa-calendar-alt px-2 ps-0"></i>
                <a href="<?php echo base_url(); ?>Pelanggan" class="nav-link">Data Pelanggan</a>
            </li>
            <li>
                <i class="fas fa-calendar-alt px-2 ps-0"></i>
                <a href="<?= site_url('Datadriver') ?>" class="nav-link active">Data Driver</a>
            </li>
            <li>
                <i class="fas fa-chart-line px-2 ps-0"></i>
                <a href="<?= site_url('updatesampah') ?>" class="nav-link">List Sampah</a>
            </li>
            <li>
                <i class="fas fa-chart-line px-2 ps-0"></i>
                <a href="<?= site_url('Donasi/read_donasi') ?>" class="nav-link">List Donasi</a>
            </li>
            <li>
                <i class="fas fa-fw fa-sign-out-alt px-4 ps-0"></i>
                <a href="<?= site_url('Registration/logout') ?>" class="nav-link">Logout</a>
            </li>
        </ul>

        <div id="topnavbar">
            <div class="topnav mb-3">
            </div>
            <div class="d-flex align-items-center mb-3 px-md-3 px-2"> <span
                    class="text-uppercase fs13 fw-bolder pe-3">search<span class="ps-1">by</span></span>
                <form class="example d-flex align-items-center"> <input type="text" placeholder="Cari Sesuatu..."
                        name="search"> <button type="submit"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="container text-center">
                <p class="teks-pesanan"> Data Driver </p>
                <div class="container text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"> No </th>
                                <th scope="col"> Nama </th>
                                <th scope="col"> Gender </th>
                                <th scope="col"> No. telp </th>
                                <th scope="col"> Alamat </th>
                                <th scope="col"> Rating </th>
                                <th scope="col"> Member </th>
                                <th scope="col"> Total perjalanan </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bambang</td>
                                <td>Laki-Laki</td>
                                <td>0812345678</td>
                                <td>Jl. ni aja No.20</td>
                                <td>4</td>
                                <td>Pro </td>
                                <td>154 Jam</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Hendra</td>
                                <td>Laki-Laki</td>
                                <td>0812345678</td>
                                <td>Jl. gusdur nomer 35</td>
                                <td>4.2</td>
                                <td>Pro </td>
                                <td>188 Jam</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Yunita</td>
                                <td>Perempuan</td>
                                <td>08255443556</td>
                                <td>Jl. Gunung Anyar nomer 13</td>
                                <td>3.7</td>
                                <td>Pro</td>
                                <td>180 Jam</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Yudi</td>
                                <td>Laki-Laki</td>
                                <td>0812345678</td>
                                <td>Jl. kalibanteng nomer 27</td>
                                <td>3.8</td>
                                <td>Super</td>
                                <td>101 Jam</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Anita</td>
                                <td>Perempuan</td>
                                <td>0852356645</td>
                                <td>Jl. Banyiwangi nomer 30</td>
                                <td>3.6</td>
                                <td>Pemula</td>
                                <td>40 Jam</td>
                            </tr>
                        </tbody>
                    </table>
                    </ol>

                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between px-3 mt-3">
                <div class="bg-bdark fs13">
                    <span>Page</span>
                    <input class="input-10 text-center" type="text" value="1">
                    <span>
                        <span class="px-1">of</span>
                        1</span>
                </div>
                <div class="d-flex justify-content-end bg-bdark fs13">
                    <span class="pe-1">Show</span>
                    <input class="input-10" type="number" value="25">
                    <span class="ps-2"><span class="pe-2">/</span>Page</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end of header -->

    <!-- footer -->
    <footer>
        <div id="container">
            <div class="footer py-4">
                <div class="row px-3">
                    <div class="social-contact ">
                        <small class="text-center mb-3">Copyright &copy; 2022. All rights reserved.</small>
                        <span class="fab fa-facebook"></span>
                        <span class="fab fa-google-plus"></span>
                        <span class="fab fa-linkedin"></span>
                        <span class="fab fa-twitter"></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>