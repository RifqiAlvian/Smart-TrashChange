<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRIVER || PROFILE</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styleDriver.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top">
            <div class="container-fluid ml-4 ml-sm-5"><a class="navbar-brand" href="#">TRASHCHANGE</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav text-right text-white ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>Pesanan/read_pesanan"> My Order</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('HistoryDriver/read/' . $this->session->userdata('Username')) ?>">My History</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url() ?>ProfileDriver">My Profile</a></li>
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

        <div class="container">
            <div class="text-nav text-white">
                <h5>Profil Saya</h5>
            </div>

            <div class="mt-3">
                <div class="card p-3 text-center">
                    <div class="d-flex flex-row justify-content-center mb-3">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>Assets/css/styleDriver.css/account-6491185_960_720.webp" width="100" class="rounded-circle">
                            <span>
                                <i class="fas fa-camera"></i>
                            </span>
                        </div>
                        <div class="d-flex flex-column user-details">
                            <h4 class="pr-5 mb-0"><?php echo $this->session->userdata('Username'); ?></h4>
                            <div class="ratings">
                                <span>4.0</span>
                                <i class='fa-solid fa-star ms-1'></i>
                                <i class='fa-solid fa-star ms-1'></i>
                                <i class='fa-solid fa-star ms-1'></i>
                                <i class='fa-solid fa-star ms-1'></i>
                                <i class='fa-regular fa-star ms-1'></i>
                            </div>
                            <span class="pl-1"><?php echo convertrole($this->session->userdata('role_id')); ?></span>
                        </div>
                    </div>
                    <h4 class="mt-3">Edit Profile</h4>
                    <form class="row" method="POST" action="<?php echo base_url(); ?>Pelanggan/update_driver">
                        <div class="col-md-6">
                            <div class="inputs">
                                <label>Username</label>
                                <input class="form-control" type="text" name="Username" placeholder="Nama" value="<?php echo $this->session->userdata('Username'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputs">
                                <label>Email</label>
                                <input class="form-control" type="text" name="Email" placeholder="Email" value="<?php echo $this->session->userdata('Email'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="inputs">
                                <label>No. Hp</label>
                                <input class="form-control" type="text" name="notelepon" placeholder="No. Hp" value="<?php echo $this->session->userdata('notelepon'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="inputs">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="alamat" placeholder="Alamat" value="<?php echo $this->session->userdata('alamat'); ?>">
                            </div>
                        </div>
                        <div class="mt-3 gap-2 d-flex justify-content-end">
                            <button class="px-3 btn btn-sm btn-success">Save</button>
                        </div>
                    </form>

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