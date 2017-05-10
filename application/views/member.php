
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Blank Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url() ?>components/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() ?>components/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= base_url() ?>components/dist/css/skins/_all-skins.min.css">
    </head>
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
                                               if(confirm('Apa anda yakin !!!') === true) {
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
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= base_url() ?>components/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="<?= base_url() ?>components/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/admin/level">
                                <i class="fa fa-th"></i> <span>Level</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">Hot</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/admin/modul">
                                <i class="fa fa-th"></i> <span>Modul</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">Hot</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/admin/wilayah_ajar">
                                <i class="fa fa-th"></i> <span>Wilayah Ajar</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">Hot</small>
                                </span>
                            </a>
                        </li>
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
                        Blank page
                        <small>it all starts here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Title</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-condensed table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <td><b>Nama Lengkap</b></td>
                                        <td><b>Username</b></td>
                                        <td><b>Level</b></td>
                                        <td><b>Wilayah</b></td>
                                        <td><b>koordinator</b></td>
                                        <td><b>Status</b></td>
                                        <td align="center"><b>#</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_member as $member) { ?>
                                        <tr>
                                            <td><?= $member['nama'] ?></td>
                                            <td><?= $member['username'] ?></td>
                                            <td><?= $member['level'] ?></td>
                                            <td><?= $member['wilayah'] ?></td>
                                            <td width="10%">
                                                <?php if ($member['koordinator'] != "1") { ?>
                                                    <div class="btn btn-xs btn-block btn-danger" onclick="change_koordniator('<?= $member['id'] ?>', '<?= $member['koordinator'] ?>')"><span class="glyphicon glyphicon-unchecked"></span> Bukan</div>
                                                <?php } else { ?>
                                                    <div class="btn btn-xs btn-block btn-success" onclick="change_koordniator('<?= $member['id'] ?>', '<?= $member['koordinator'] ?>')"><span class="glyphicon glyphicon-check"></span> Iya</div>
                                                <?php } ?>
                                            </td>
                                            <td width="10%">
                                                <?php if ($member['status'] != "1") { ?>
                                                    <div class="btn btn-xs btn-block btn-danger" onclick="change_status('<?= $member['id'] ?>', '<?= $member['status'] ?>')"><span class="glyphicon glyphicon-unchecked"></span> Belum Aktif</div>
                                                <?php } else { ?>
                                                    <div class="btn btn-xs btn-block btn-success" onclick="change_status('<?= $member['id'] ?>', '<?= $member['status'] ?>')"><span class="glyphicon glyphicon-check"></span> Aktif</div>
                                                <?php } ?>
                                            </td>
                                            <td width="10%">
                                                <div class="btn btn-xs btn-block btn-primary" onclick="hapus('<?= $member['id'] ?>')"><span class="glyphicon glyphicon-trash"></span> Delete</div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            Footer
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->

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

        <!-- jQuery 2.2.3 -->
        <script src="<?= base_url() ?>components/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>components/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?= base_url() ?>components/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>components/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>components/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>components/dist/js/demo.js"></script>

        <script type="text/javascript">
                                            function change_koordniator(id, value) {
                                                if (confirm("Apakah anda yakin ingin menggantinya ???") === true) {
                                                    $.ajax({
                                                        url: "<?php echo site_url('admin/change_koordinator') ?>/" + id + "/" + value,
                                                        type: "POST",
                                                        dataType: "JSON",
                                                        success: function (data)
                                                        {
                                                            if (data === "TRUE") {
                                                                window.location.reload();
                                                            } else {
                                                                alert("Ubah koordinator gagal !!!");
                                                            }
                                                        }
                                                    });
                                                }
                                            }
                                            
                                            function change_status(id, value) {
                                                if (confirm("Apakah anda yakin ingin menggantinya ???") === true) {
                                                    $.ajax({
                                                        url: "<?php echo site_url('admin/change_status') ?>/" + id + "/" + value,
                                                        type: "POST",
                                                        dataType: "JSON",
                                                        success: function (data)
                                                        {
                                                            if (data === "TRUE") {
                                                                window.location.reload();
                                                            } else {
                                                                alert("Ubah status gagal !!!");
                                                            }
                                                        }
                                                    });
                                                }
                                            }
                                            
                                            function hapus(id) {
                                                if (confirm("Apakah anda yakin ingin menghapusnya ???") === true) {
                                                    $.ajax({
                                                        url: "<?php echo site_url('admin/hapus_member') ?>/" + id,
                                                        type: "POST",
                                                        dataType: "JSON",
                                                        success: function (data)
                                                        {
                                                            if (data === "TRUE") {
                                                                window.location.reload();
                                                            } else {
                                                                alert("Hapus member gagal !!!");
                                                            }
                                                        }
                                                    });
                                                }
                                            }
        </script>

    </body>
</html>
