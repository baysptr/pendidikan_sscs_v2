
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PENDIDIKAN SSCS | WEB</title>
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
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= base_url() ?>components/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="<?= base_url() ?>components/index2.html"><b>Pend </b>SSCS</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Daftar Member SSCS</p>

                <form id="form" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Full name" autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" id="email" class="form-control" placeholder="e-Mail" autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                        <span class="glyphicon glyphicon-triangle-top form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <select name="level" id="level" class="form-control">
                            <option disabled selected>Pilih Level</option>
                            <?php foreach ($data_level as $level) { ?>
                                <?php if($level['level'] != "Admin") { ?>
                                    <option value="<?= $level['id'] ?>"><?= $level['level'] ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <select name="wilayah" id="wilayah" class="form-control">
                            <option disabled selected>Pilih Wilayah Ajar</option>
                            <?php foreach ($data_wilayah as $wilayah) { ?>
                                <option value="<?= $wilayah['id'] ?>"><?= $wilayah['wilayah'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-4 pull-right">
                            <button type="button" class="btn btn-primary btn-block btn-flat" onclick="save()">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="<?= base_url() ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?= base_url() ?>components/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>components/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?= base_url() ?>components/plugins/iCheck/icheck.min.js"></script>
        <script>
                                $(function () {
                                    $('input').iCheck({
                                        checkboxClass: 'icheckbox_square-blue',
                                        radioClass: 'iradio_square-blue',
                                        increaseArea: '20%' // optional
                                    });
                                });

                                function save() {
                                    $.ajax({
                                        url: "<?= site_url() ?>/welcome/do_register",
                                        type: 'POST',
                                        data: $('#form').serialize(),
                                        dataType: "JSON",
                                        success: function (data) {
                                            if (data === "TRUE") {
                                                alert("Selamat anda berhasil Mendaftar, untuk bisa login mohon segera hubungi admin !!!");
                                                window.location = "<?= base_url() ?>";
                                            } else {
                                                alert("Username atau Password anda tidak diketahui !!!");
                                            }
                                        }
                                    });
                                }
        </script>
    </body>
</html>
