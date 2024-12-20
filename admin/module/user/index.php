<style>
    .btn-blue-costum{
        background-color: #2C80FD;
        color: white;
    }
    .btn:hover{
        background-color: #0263F4;
        color: white;
    }
</style>
<!-- sidebar end -->
<!-- main content -->
<?php 
    $id = $_SESSION['admin']['id_member'];
    $hasil = $lihat->member_edit($id);
?>
<h4>Profil Pengguna Aplikasi</h4>
<br>
<?php if (isset($_GET['success'])) { ?>
<div class="alert alert-success">
    <p>Edit Data Berhasil!</p>
</div>
<?php } ?>
<?php if (isset($_GET['remove'])) { ?>
<div class="alert alert-success">
    <p>Hapus Data Berhasil!</p>
</div>
<?php } ?>
<div class="row">
    <div class="col-sm-3">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="mt-2"><i class="fa fa-user"></i> Foto Pengguna</h5>
            </div>
            <div class="card-body">
                <img src="assets/img/user/<?php echo $hasil['gambar'];?>" alt="#" class="img-fluid w-100" />
            </div>
            <div class="card-footer">
                <form action="fungsi/edit/edit.php?gambar=user" method="post" enctype="multipart/form-data">
                    <input type="file" name="foto" accept="image/*">
                    <input type="hidden" name="foto2" value="<?php echo $hasil['gambar']; ?>">
                    <input type="hidden" name="id" value="<?php echo $hasil['id_member']; ?>">
                    <br><br>
                    <button type="submit" class="btn btn-blue-costum btn-md" value="Tambah">
                        <i class="fas fa-edit mr-1"></i> Ganti Foto
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="mt-2"><i class="fa fa-user"></i> Kelola Pengguna</h5>
            </div>
            <div class="card-body">
                <div class="box-content">
                    <form action="fungsi/edit/edit.php?profile=edit" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <fieldset>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">Nama</label>
                                <div class="input-group">
                                    <input type="text" name="nama" class="form-control" style="border-radius: 0px;" data-items="4" value="<?= $hasil['nm_member']; ?>" required>
                                </div>
                            </div>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">Email</label>
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control" style="border-radius: 0px;" value="<?= $hasil['email']; ?>" required>
                                </div>
                            </div>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">Telepon</label>
                                <div class="input-group">
                                    <input type="text" name="tlp" class="form-control" style="border-radius: 0px;" value="<?= $hasil['telepon']; ?>" required>
                                </div>
                            </div>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">NIK (KTP)</label>
                                <div class="input-group">
                                    <input type="text" name="nik" class="form-control" style="border-radius: 0px;" value="<?= $hasil['NIK']; ?>" required>
                                </div>
                            </div>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">Alamat</label>
                                <div class="input-group">
                                    <textarea name="alamat" rows="3" class="form-control" style="border-radius: 0px;" required><?= $hasil['alamat_member']; ?></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?= $hasil['id_member']; ?>">
                            <button class="btn btn-blue-costum" name="btn" value="Tambah">
                                <i class="fas fa-edit"></i> Ubah Profile
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="mt-2"><i class="fa fa-lock"></i> Ganti Password</h5>
            </div>
            <div class="card-body">
                <div class="box-content">
                    <form action="fungsi/edit/edit.php?pass=ganti-pas" method="post" class="form-horizontal">
                        <fieldset>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">Username</label>
                                <div class="input-group">
                                    <input type="text" name="user" class="form-control" style="border-radius: 0px;" value="<?= $hasil['user']; ?>" required>
                                </div>
                            </div>
                            <div class="control-group mb-3">
                                <label for="typeahead" class="control-label">Password Baru</label>
                                <div class="input-group">
                                    <input type="password" name="pass" id="pass" placeholder="Enter Your New Password" class="form-control" style="border-radius: 0px;" data-items="4" value="" required>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="form-control" style="border-radius: 0px;" value="<?= $hasil['id_member']; ?>" required>
                            <button type="submit" class="btn btn-blue-costum" value="Tambah" name="proses"><i class="fas fa-edit"></i> Ubah Password</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>