<?php

session_start();
if (!empty($_SESSION['admin'])) {
    require '../../config.php';
    if (!empty(htmlentities($_GET['kategori']))) {
        $id = htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM kategori WHERE id_kategori = ?';
        $row = $conn->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=kategori&&remove=hapus-data"</script>';
    }
    if (!empty(htmlentities($_GET['barang']))) {
        $id = htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM barang WHERE id_barang = ?';
        $row = $conn->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=barang&&remove=hapus-data"</script>';
    }
    if (!empty(htmlentities($_GET['jual']))) {
        $dataI[] = htmlentities($_GET['brg']);
        $sqlI = 'SELECT * FROM barang WHERE id_barang = ?';
        $rowI = $conn->prepare($sqlI);
        $rowI->execute($dataI);
        $hasil = $rowI->fetch();

        $id = htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM penjualan WHERE id_penjualan = ?';
        $row = $conn->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=jual"</script>';
    }
    if (!empty(htmlentities($_GET['penjualan']))) {
        $sql = 'DELETE FROM penjualan';
        $row = $conn->prepare($sql);
        $row->execute();
        echo '<script>window.location="../../index.php?page=jual"</script>';
    }
    if (!empty(htmlentities($_GET['laporan']))) {
        $sql = 'DELETE FROM nota';
        $row = $conn->prepare($sql);
        $row->execute();
        echo '<script>window.location="../../index.php?page=laporan&&remove=hapus"</script>';
    }
}