<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>
<!-- header -->
<header>
        <div class="px-0 bg-light">
            <div class="d-flex">
                <div class="d-flex align-items-center " id="navbar">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true"
                        aria-label="Toggle navigation">
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
                <i class="fas fa-comment-alt px-2 ps-0"></i><a href="<?= site_url('homeadmin') ?>" class="nav-link active">History Pemesanan</a>
            </li>
            <li>
                <i class="fas fa-calendar-alt px-2 ps-0"></i><a href="<?= site_url('Pelanggan') ?>" class="nav-link">Data Pelanggan</a>
            </li>
            <li>
                <i class="fas fa-calendar-alt px-2 ps-0"></i><a href="<?= site_url('Datadriver') ?>" class="nav-link active">Data Driver</a>
            </li>
            <li>
                <i class="fas fa-chart-line px-2 ps-0"></i><a href="<?= site_url('updatesampah') ?>" class="nav-link">List Sampah</a>
            </li>
            <li>
                <i class="fas fa-fw fa-sign-out-alt px-4 ps-0"></i><a href="<?= site_url('Registration/logout') ?>" class="nav-link">Logout</a>
            </li>
        </ul>

        <div class="mt-3 container-fluid ps-3">
            <h3 class="col-sm-5 ps-3">Halaman Tambah Data</h3>
            <hr>
            <br>

            <form method="POST" action="<?php echo base_url('Updatesampah/menambah_data'); ?>">
                <div class="form-group row">
                    <label for="kategori" class="col-md-2 mt-3 col-form-label">Kategori</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="kategori">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis" class="col-md-2 mt-3 col-form-label">Jenis</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="jenis">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="satuan" class="col-md-2 mt-3 col-form-label">Jumlah</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="satuan">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="satuankilo" class="col-md-2 mt-3 col-form-label">Satuan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="satuankilo">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hargamin" class="col-md-2 mt-3 col-form-label">Harga Minimum
                    </label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="hargamin">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="harga" class="col-md-2 mt-3 col-form-label">Harga Maximum</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="harga">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="harga" class="col-md-2 mt-3 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="<?php echo base_url('updatesampah')?>" type="reset" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
        </div>
        </form>

        <!--js link--->
        <script type="text/javascript" src="js/script.js"></script>
        <!-- js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>