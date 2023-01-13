<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Admin</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleadmin.css">
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
<!-- header -->
<header>
    <div class="px-0 bg-light">
        <div class="d-flex">
            <div class="d-flex align-items-center " id="navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">

                    <!-- Sidebar toggle -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none
                                rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- end\ -->
                    <span class="fas fa-bars ps-3"></span>
                </button>
                <a class="text-decoration-none fs14 ps-3" href="<?= site_url('homeadmin') ?>">ADMIN PAGE
                </a>
            </div>
            <div id="navbar2" class="d-flex justify-content-end pe-4"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></div>
        </div>
        <div class="d-md-flex">
            <ul id="navbar-items" class="">
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

            <div class="mt-3 container-fluid ps-3">
                <h3 class="col-sm-5 ps-3">Halaman Tambah Data</h3>
                <hr>
                <br>
                <form method="post" action="<?php echo base_url(); ?>Pelanggan/update_data">

                    <input type="hidden" name="id" value="<?php echo $hosting[0]->id_Account ?>">

                    <div class="form-group row">
                        <label for="kategori" class="col-md-2 mt-3 col-form-label">ID Account</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="id_Account"
                                value="<?php echo $hosting[0]->id_Account ?> " readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis" class="col-md-2 mt-3 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="Username"
                                value="<?php echo $hosting[0]->Username ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="satuan" class="col-md-2 mt-3 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="Email"
                                value="<?php echo $hosting[0]->Email ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="satuankilo" class="col-md-2 mt-3 col-form-label">Role</label>
                        <div class="col-sm-5">
                            <p>Role List : (0 = User, 1 = Admin, 2 = Driver)</p>
                            <input type="text" class="form-control" name="role_id"
                                value="<?php echo $hosting[0]->role_id ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hargamin" class="col-md-2 mt-3 col-form-label">Tanggal Akun Dibuat
                        </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="date_crated"
                                value="<?php echo $hosting[0]->date_created ?> " readonly>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label for="harga" class="col-md-2 mt-3 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </div>
            </div>
        </div>
</main>
</form>

<footer>
    <div id="footer-main">
        <div class="container py-4 mt-5">
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

</html>