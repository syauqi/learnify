<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Pendaftaran Guru - Learnify</title>

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
                                    Tambah Materi</p>
                                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                    dibawah </p>
                                <hr>
                            </div>

                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="<?=base_url('admin/tambah_materi')?>">


                                    <div class="col-md-12 bg-white"
                                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data"
                                            action="<?=base_url('guru/add_materi')?>">
                                            <input type="hidden" name="id">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Nama Guru</label>
                                                    <input autocomplete="off" required type="text" list="nama_guru"
                                                        name="nama_guru" class="form-control" id="inputEmail4">
                                                    <datalist id=nama_guru>
                                                        <?php
include "koneksi.php";
$qry = mysqli_query($koneksi, "SELECT nama_guru From guru");
while ($t = mysqli_fetch_array($qry)) {
    echo "<option value='$t[nama_guru]'>";
}
?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Kelas</label>
                                                <select required id="inputState" name="nama_mapel" class="form-control">
                                                    <option selected>Pilih disini</option>
                                                    <option>IPA</option>
                                                    <option>Matematika</option>
                                                    <option>Bahasa Inggris</option>
                                                    <option>Bahasa Indonesia</option>
                                                    <option>Pendidikan Agama Islam</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" name="video"
                                                            class="custom-file-input" id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Upload
                                                            Video
                                                            Materi Disini</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                                <textarea class="form-control" required name="deskripsi"
                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Kelas</label>
                                                <select required id="inputState" name="kelas" class="form-control">
                                                    <option selected>Pilih disini</option>
                                                    <option value="X">X ( Kelas Sepuluh )</option>
                                                    <option value="XI">XI ( Kelas Sebelas )</option>
                                                    <option value="XII">XII ( Kelas Dua Belas )</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Tambah
                                                materi</button>
                                    </div>


                                </form>
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
    <script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    </script>
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