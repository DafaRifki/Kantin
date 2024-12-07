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

    public function toko()
    {
        $sql = "select * from toko where id_toko='1'";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }
}
