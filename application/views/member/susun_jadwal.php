<html>
    <?= $meta ?>
    <link href="<?= base_url() ?>components/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url() ?>components/index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>S</b>SCS</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Pend. </b>SSCS</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>components/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= base_url() ?>components/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="javascript:;" onclick="javascript:
                                                            if (confirm('Apa anda yakin !!!') === true) {
                                                        window.location = '<?= site_url() ?>/welcome/log_out';
                                                    }" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= base_url() ?>components/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?= site_url("member") ?>">
                                <i class="fa fa-th"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <?php foreach ($link_menu as $link) { ?>
                            <li>
                                <a href="<?= site_url($link['link']) ?>">
                                    <i class="fa fa-th"></i> <span><?= $link['menu'] ?></span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('koordinator') == 1) { ?>
                            <li>
                                <a href="<?= site_url() ?>/member/susun_jadwal">
                                    <i class="fa fa-th"></i> <span>Susun Jadwal</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?= $title ?>
                    </h1>
                    <ol class="breadcrumb">
                        <div class="btn btn-xs btn-primary" onclick="help_me()" title="Panduan dalam menyusun dan menetapkan Jadwal"><span class="glyphicon glyphicon-screenshot"></span> Help Me!</div>
                        <li><a href="<?= site_url("member") ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="javascript:;"><?= $title ?></a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">List Modul dari Divisi Pendidikan</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <td><b>No</b></td>
                                                    <td><b>Nama Modul</b></td>
                                                    <td><b>Deskripsi Modul</b></td>
                                                    <td><b>File Modul</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($data_modul as $modul) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $modul['nama_modul'] ?></td>
                                                        <td><?= $modul['deskripsi_modul'] ?></td>
                                                        <td>
                                                            <a href="<?= base_url() ?>resource/modul/<?= $modul['file_modul'] ?>" target="_blank">
                                                                <img src="<?= base_url() ?>components/img/file.ico" width="25px" height="auto">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    List Modul dari Divisi Pendidikan
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form Susun Jadwal Sesuaikan dengan modul</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <form action="<?= site_url('member/add_susun_jadwal') ?>" method="post">
                                            <table class="table table-condensed table-hover">
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="tgl" id="tgl" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Modul</td>
                                                    <td>:</td>
                                                    <td>
                                                        <select name="modul" id="modul" class="form-control">
                                                            <option disabled selected>Pilih Modul Disini</option>
                                                            <?php foreach ($data_modul as $select_modul) { ?>
                                                                <option value="<?= $select_modul['id'] ?>"><?= $select_modul['nama_modul'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Di Wilayah Belajar</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="wilayah" id="wilayah" disabled="true" value="<?= $data_wilayah->wilayah ?>" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Dengan Korwil</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="korwil" id="korwil" disabled="true" value="<?= $this->session->userdata('nama') ?>" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="pull-right">
                                                        <button type="reset" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    Form Susun Jadwal Sesuaikan dengan modul
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        List Jadwal yang sudah dibuat
                                        <small>Klik nama Modul untuk lihat parameter</small>
                                    </h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <td><b>No</b></td>
                                                    <td><b>Tanggal</b></td>
                                                    <td><b>Modul</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.12
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- Modal -->
        <div class="modal modal-success fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Panduan bagaimana menyusun jadwal dan mem <i><b>fix</b></i> kan Agenda Belajar</h4>
                    </div>
                    <div class="modal-body">
                        <ul class="timeline">
                            <li class="time-label">
                                <span class="bg-red">
                                    Pertama
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-envelope bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> Saat ada waktu rehat</span>

                                    <h3 class="timeline-header"><a href="<?= site_url('member/modul') ?>">Cek Modul serta Parameternya</a></h3>

                                    <div class="timeline-body">
                                        Modul yang terdapat di <i><b>WEB Pendidikan SSCS</b></i> ini dibuat untuk pedoman pengajar sebagai bahan ajar kepada adek-adek merdeka.
                                        diharapkan <i>KorWil</i> untuk melihat modul berserta capaian pembelajarannya di tombol bawah ini. terimakasih.
                                    </div>

                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs" onclick="window.location = '<?= site_url() ?>/member/modul'">Modul Belajar</a>
                                    </div>
                                </div>
                            </li>
                            <li class="time-label">
                                <span class="bg-red">
                                    Kedua
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-envelope bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> Saat Selesai Mengajar</span>

                                    <h3 class="timeline-header"><a href="javascript:;">Diskusikan</a></h3>

                                    <div class="timeline-body">
                                        Diskusikan terlebih dahulu dengan para pengajar di masing-masing wilayah belajar. dalam diskusi tersebut sebagai pengajar hendaknya menyesuaikan ke kebutuhan adek-adek merdeka kita yang di wilayah belajar tersebut
                                    </div>

                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">...</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <b>NB: </b>Jika pada saat jadwal terbuat dan selama kurun waktu 3 hari tidak ada perubahan maka kami anggap jadwal tersebut bener-bener siap direalisasikan dan tidak dapat dirubah maupun dihapus
                    </div>
                </div>
            </div>
        </div>

        <?= $javascript ?>
        <script type="text/javascript" src="<?= base_url() ?>components/plugins/datepicker/bootstrap-datepicker.js"></script>

        <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#tgl').datepicker({
                                                        format: 'yyyy-mm-dd',
                                                        autoclose: true
                                                    });
                                                });
                                                
                                                function help_me(){
                                                    $("#myModal").modal("show");
                                                }
        </script>

    </body>
</html>
