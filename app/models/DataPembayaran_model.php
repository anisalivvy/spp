<?php

class datapembayaran_model {
    private $table = 'pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataPembayaran()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getDataPembayaranById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->resultSingle();
    }

    public function tambahDataPembayaran($data)
    {
        $query = "INSERT INTO pembayaran (tahun_ajaran, nominal) VALUES (:tahun_ajaran, :nominal)";

        $this->db->query($query);
        $this->db->bind("tahun_ajaran", $data['tahun_ajaran']);
        $this->db->bind("nominal", $data['nominal']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPembayaran($id_pembayaran)
    {
        $query = "DELETE FROM {$this->table} WHERE id_pembayaran =:id_pembayaran";
        $this->db->query($query);
        $this->db->bind('id_pembayaran', $id_pembayaran);

        $this->db->execute();
        $this->db->rowCount();
    }
}
?>