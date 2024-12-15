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
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="foto" accept="image/*">
                    <input type="hidden" name="foto2" value="<?php echo $hasil['gambar']; ?>">
                    <input type="hidden" name="id" value="<?php echo $hasil['id_member']; ?>">
                    <br><br>
                    <button type="submit" class="btn btn-primary btn-md" value="Tambah">
                        <i class="fas fa-edit mr-1"></i> Ganti Foto
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>