<?php
$id = $_GET['barang'];
$hasil = $lihat->barang_edit($id);
?>

<a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i></a>
<h4>Edit Barang</h4>
<?php if (isset($_GET['success'])) {?>
<div class="alert alert-success">
    <p>Edit Data Berhasil!</p>
</div>
<?php 
} 
if (isset($_GET['remove'])) {?>
<div class="alert alert-danger">
    <p>Hapus Data Berhasil!</p>
</div>
<?php } ?>
<div class="card card-body">
    <div class="table-responsive">
        <form action="fungsi/edit/edit.php?barang=edit" method="post">
            <tr>
                <td>ID Barang</td>
                <td>
                    <input type="text" name="id"class="form-control" value="<?= $hasil['id_barang']; ?>">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" class="form-control">
                        <option value="<?= $hasil['id_kategori']; ?>"><?= $hasil['nama_kategori']; ?></option>
                        <option value="#">Pilih Kategori</option>
                        <?php $kat = $lihat->kategori(); foreach($kat as $isi){ ?>
                            <option value="<?= $isi['id_kategori']; ?>"><?= $isi['nama_kategori']; ?></option>
                            <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama" class="form-control" value="<?= $hasil['nama_barang']; ?>"></td>
            </tr>
            <tr>
                <td>Merk Barang</td>
                <td><input type="text" name="merk" class="form-control" value="<?= $hasil['merk']; ?>"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="beli" class="form-control" value="<?= $hasil['harga_beli']; ?>"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="jual" class="form-control" value="<?= $hasil['harga_jual']; ?>"></td>
            </tr>
            <tr>
                <td>Satuan Barang</td>
                <select name="satuan" class="form-control">
                    <option value="<?= $hasil['satuan_barang']; ?>"><?= $hasil['satuan_barang']; ?></option>
                    <option value="#">Pilih Satuan</option>
                    <option value="PCS">PCS</option>
                </select>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" class="form-control" value="<?= $hasil['stok']; ?>"></td>  
            </tr>
            <tr>
                <td>Tanggal Update</td>
                <td><input type="text" name="tgl" class="form-control" value="<?= date("j F Y, G:i"); ?>" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
            </tr>
        </form>
    </div>
</div>