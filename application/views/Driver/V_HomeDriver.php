<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRIVER || ORDER</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styleDriver.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top">
            <div class="container-fluid ml-4 ml-sm-5">
                <a class="navbar-brand" href="#">TRASHCHANGE</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav text-right text-white ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url() ?>Pesanan/read_pesanan"> My Order</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('HistoryDriver/read/' . $this->session->userdata('Username')) ?>">My History</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link " href="<?php echo base_url() ?>ProfileDriver">My Profile</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Registration/logout"><i>Logout</i></a></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>

        <div class="container text-nav text-white">
            <h5>Pesanan Masuk</h5>
        </div>

        <div class="container d-flex justify-content-center mt-5">
            <div class="row mr-5 ml-2">

                <div>
                    <?php foreach ($pesanan as $data) : ?>
                        <div class="card-order p-4">

                            <div class="top-container d-flex justify-content-start align-items-center">
                                <div class="text-cus1">
                                    <i class="text-white fas fa-face-grin-stars"></i>
                                </div>
                                <span class="shipped pl-2"><?php echo $data->NamaPelanggan ?></span>
                            </div>

                            <div class="middle-container pt-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <img src="<?php echo base_url(); ?>Assets/css/account-6491185_960_720.webp" class="img-fluid " width="90">
                                </div>

                                <div class="d-flex flex-column text-right">
                                    <span class="item-name"><?php echo $data->Sampah ?></span>
                                    <span class="item-quantity"><?php echo $data->BeratSampah ?> Kg</span>
                                    <div class="item-price-container mt-3">
                                        <span class="item-price">
                                            <span class="dollar">Rp </span><?php echo convertupah($data->BeratSampah); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mt-2">
                                <i class="fas fa-trophy"></i>
                                <span class="reward-points pl-2"><?php echo convertrewards($data->BeratSampah); ?></span>
                                <span class="reward-points-text">Rewards Points</span>
                            </div>

                            <div class="d-flex align-items-center mt-2">
                                <i class="fas fa-trophy"></i>
                                <span class="reward-points pl-2"><?php echo $data->AlamatPelanggan; ?></span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-5 pb-3">
                                <td onclick="javascript: return confirm('Anda Yakin Hapus?')">
                                    <form action="<?php echo base_url('Pesanan/delete_pesanan/' . $data->id_pesanan) ?>" method="post">
                                        <input type="hidden" name="id_pesanan" value="<?= $data->id_pesanan ?>">
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash small"></i>Delete</button>
                                    </form>
                                </td>
                                <td onclick="javascript: return confirm('Anda Yakin Menerima Pesanan?')">
                                    <form action="<?php echo base_url('Pesanan/update_pesanan/' . $data->id_pesanan) ?>" method="post">
                                        <input type="hidden" name="id_pesanan" value="<?= $data->id_pesanan ?>">
                                        <input type="hidden" name="NamaDriver" value="<?php echo $this->session->userdata('Username'); ?>">
                                        <input type="hidden" name="UpahDriver" value="<?php echo convertupah($data->BeratSampah); ?>">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-trash small"></i>Done</button>
                                    </form>
                                </td>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </main>


    <footer>
        <div id="footer py-4">
            <div class="main-footer mt-5">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5">TRASHCHANGE <br> Copyright &copy; 2022. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <i class="fa-brands fa-facebook mr-4 text-sm"></i>
                        <i class="fa-brands fa-google-plus mr-4 text-sm"></i>
                        <i class="fa-brands fa-linkedin mr-4 text-sm"></i>
                        <i class="fa-brands fa-twitter mr-4 mr-sm-5 text-sm"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>