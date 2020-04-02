<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Update Data Guru - Learnify</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                        <div class="card card-primary">
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4" style="font-size: 50px;">
                                    Update Data Guru</p>
                                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                    dibawah </p>
                                <hr>
                            </div>
                            <?php foreach ($user as $u) {?>
                            <div class="card-body">
                                <form method="POST" action="<?=base_url('admin/guru_edit')?>">

                                    <div class="form-group">
                                        <label for="nip">Nomor Induk Pegawai</label>
                                        <input id="nip" type="text" class="form-control" value="<?=$u->nip?>"
                                            name="nip">
                                        <?=form_error('nip', '<small class="text-danger">', '</small>');?>
                                        <div class="invalid-feedback">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" value="<?=$u->email?>" class="form-control"
                                            name="email">
                                        <?=form_error('email', '<small class="text-danger">', '</small>');?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input id="nama" type="text" value="<?=$u->nama_guru?>" class="form-control"
                                            name="nama">
                                        <?=form_error('nama', '<small class="text-danger">', '</small>');?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Update data
                                        </button>
                                    </div>
                                </form>
                                <?php }?>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Learnify 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?=base_url('assets/')?>stisla-assets/node_modules/jquery-pwstrength/jquery.pwstrength.min.js">
    </script>
    <script src="<?=base_url('assets/')?>stisla-assets/node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?=base_url('assets/')?>stisla-assets/js/scripts.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?=base_url('assets/')?>stisla-assets/js/page/auth-register.js"></script>
</body>

</html>