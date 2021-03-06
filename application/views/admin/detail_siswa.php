<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Detail Siswa - Learnify </title>

    <!-- General CSS Files -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/components.css">
</head>

<body>

    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:4px !important;"
                                src="../../assets/stisla-assets/img/avatar/avatar-1.png"
                                class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Selamat datang, <?php
$data['user'] = $this->db->get_where('admin', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['username'];
?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin - Learnify</div>
                            <a href="<?=base_url('welcome/logout')?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <a href="<?=base_url('admin')?>"
                            style="font-size: 35px; font-weight:900;font-family: 'Roboto', sans-serif;"
                            class="text-success">&#9795;Learnify.</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?=base_url('admin')?>">LY</a>
                    </div>

                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown ">
                            <a href="<?=base_url('admin')?>" class="nav-link"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Management Siswa</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Siswa</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_siswa')?>">Data Siswa</a></li>
                            </ul>
                        </li>

                        <li class="menu-header">Management Guru</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Guru</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_guru')?>">Data Guru</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_guru')?>">Tambah Data Guru</a>
                                </li>

                            </ul>
                        </li>

                        <li class="menu-header">Management Materi</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>Materi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_materi')?>">Data Materi</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('admin/tambah_materi')?>">Tambah Materi</a>
                                </li>

                            </ul>
                        </li>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Management Detail Data Siswa Learnify </h1>
                    </div>
                    <div class="row container">
                        <div class="col-md-7 bg-white p-3"
                            style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                            <h3 class="font-weight-bold" style="color: #34395e!important">Detail Siswa</h3>
                            <hr>
                            <p style="font-weight:500px!important;font-size:18px;text-align:justify;"
                                class="text-justify">
                                <span class="font-weight-bold">ID Siswa :</span>
                                <?=$detail->id?>
                                <br> <span class="font-weight-bold">Nama Siswa :</span> <?=$detail->nama?>
                                <br> <span class="font-weight-bold">Alamat Email :</span>
                                <?=$detail->email?><br><span class="font-weight-bold">Password : </span>
                                Terenkripsi<br><span class="font-weight-bold">Akun Aktif? :</span>
                                <?=$detail->is_active?><br><span class="font-weight-bold">Terdaftar pada :</span>
                                <?=$detail->date_created?><br>
                            </p>



                            <a href="<?=base_url('admin/data_siswa')?>" class="btn btn-success btn-block">Kembali</a>
                        </div>

                        <div class="col-md-4 bg-white p-3 ml-3"
                            style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                            <img src="<?=base_url() . 'assets/profile_picture/' . $detail->image;?>"
                                class="card-img-top img-responsive" alt="...">
                        </div>


                    </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2020 <div class="bullet"></div> Code & Design by <a
                href="https://syauqizaidan.github.io/">Syaauqi</a>
        </div>
        <div class="footer-right">
            Made with <span class="text-danger"> &#10084;</span> by Syaauqi
        </div>
    </footer>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

    <!-- Template JS File -->
    <script src="<?=base_url('assets/')?>stisla-assets/js/scripts.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>