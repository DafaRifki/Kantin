<?php

/* 
? Proses Tampil
*/

class View
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function member()
    {
        $sql = "select member.*, login.*
                from member inner join login on member.id_member = login.id_member";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetchAll();
        return $hasil;
    }

    public function member_edit($id)
    {
        $sql = "select member.*, login.*
                from member inner join login on member.id_member = login.id_member where member.id_member = ?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $hasil = $row->fetchAll();
        return $hasil;
    }

    public function toko()
    {
        $sql = "select * from toko where id_toko='1'";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }

    public function kategori()
    {
        $sql = "select * from kategori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }

    public function barang()
    {
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_barang.id_kategori = kategori.id_kategori ORDER BY id DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }

    public function barang_stok()
    {
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_barang.id_kategori = kategori.id_kategori where stok <= 3 ORDER BY id DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }

    public function barang_edit($id)
    {
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_barang.id_kategori = kategori.id_kategori where id_barang = ?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $hasil = $row->fetch();
        return $hasil;
    }

    public function barang_cari($cari)
    {
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_barang.id_kategori = kategori.id_kategori where id.barang like '%$cari' or nama_barang like '%$cari' or merk like '%$cari'";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }
}
