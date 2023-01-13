<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Sampah</title>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">

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

    <div class="d-md-flex">
        <ul id="navbar-items" class="p-0">
            <li>
                <i class="fas fa-comment-alt px-2 ps-0"></i>
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

            <div class="d-flex align-items-center mb-3 px-md-3 px-2"> <span
                    class="text-uppercase fs13 fw-bolder pe-3 mb-3">search<span class="ps-1">by</span></span>
                <form class="example d-flex align-items-center mb-3"> <input type="text" placeholder="Cari Sesuatu..."
                        name="search"> <button type="submit"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="container text-center">
                <p class="teks-pesanan"> Data Pelanggan </p>
                <div class="container text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID_Pelanggan</th>
                                <th scope="col">Username </th>
                                <th scope="col">Email</th>
                                <th scope="col">Role_ID </th>
                                <th scope="col">Y-M-D</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <?php foreach ($hosting as $data) : ?>
                        <tr>
                            <td><?php echo $data->id_Account ?></td>
                            <td><?php echo $data->Username ?></td>
                            <td><?php echo $data->Email ?></td>
                            <td><?php echo convertrole($data->role_id) ?></td>
                            <td><?php echo $data->date_created ?></td>
                            <td>
                                <form action="<?php echo base_url('Pelanggan/delete_data/' . $data->id_Account) ?>"
                                    method="post">
                                    <input type="hidden" name="id" value="<?= $data->id_Account ?>">
                                    <a href=" <?php echo base_url('Pelanggan/update_data/' . $data->id_Account) ?>"
                                    class="btn btn-sm btn-success"><i class="fa fa-pencil small"></i>Update</a>
                                    <button onclick="javascript: return confirm('Anda Yakin Hapus?')" class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash small"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <!-- <div class="d-flex align-items-center justify-content-between px-3 mt-3">
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
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</main>
<<<<<<< Updated upstream



<!-- footer 
=======
<!-- 
<footer>

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream


</footer>
=======
</footer> -->




>>>>>>> Stashed changes


<!--js link--->
<script type="text/javascript" src="js/script.js"></script>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>