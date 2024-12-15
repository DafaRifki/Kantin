<?php

//! session admin

if (!empty($_GET['kategori'])) {
    $nama = htmlentities(htmlentities($_POST['kategori']));
    $tgl = date("j F Y, G:i");
    $data[] = $nama;
    $data[] = $tgl;
    $sql = 'INSERT INTO kategori (nama_kategori,tgl_input) VALUES (?,?)';
    $row = $conn->prepare($sql);
    $row->execute($data);
    echo '<script>window.location="../../index.php?page=kategori&&success=tambah-data"</script>';
}

if (!empty($_GET['barang'])) {
    $id = htmlentities($_POST['id']);
    $kategori = htmlentities($_POST['kategori']);
    $nama = htmlentities($_POST['nama']);
    $merk = htmlentities($_POST['merk']);
    $beli = htmlentities($_POST['beli']);
    $jual = htmlentities($_POST['jual']);
    $satuan = htmlentities($_POST['satuan']);
    $stok = htmlentities($_POST['stok']);
    $tgl = htmlentities($_POST['tgl']);

    $data[] = $id;
    $data[] = $kategori;
    $data[] = $nama;
    $data[] = $merk;
    $data[] = $beli;
    $data[] = $jual;
    $data[] = $satuan;
    $data[] = $stok;
    $data[] = $tgl;

    $sql = 'INSERT INTO barang (id_barang,id_kategori,nama_barang,merk,harga_beli,harga_jual,satuan_barang,stok,tgl_input) VALUES (?,?,?,?,?,?,?,?,?)';
    $row = $conn->prepare($sql);
    $row->execute($data);
    echo '<script>window.location="../../index.php?page=barang&&success=tambah-data"</script>';
}