<?php

class datapetugas_model 
{
    private $table = 'petugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataPetugas()
    {
        $this->db->query("SELECT petugas.id_petugas, petugas.nama_petugas, pengguna.username FROM petugas JOIN 
        pengguna ON pengguna.id_pengguna = petugas.id_pengguna");
        // $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getDataPetugasById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataPetugas($data)
    {
        $query = "INSERT INTO petugas (nama_petugas, id_pengguna) VALUES(:nama_petugas, :id_pengguna)";
        $this->db->query($query);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('id_pengguna', $data['id_pengguna']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPetugas($id_petugas)
    {
        $query = "DELETE FROM {$this->table} WHERE id_petugas = :id_petugas";
        $this->db->query($query);
        $this->db->bind('id_petugas', $id_petugas);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataPetugas($data)
    {
        $query = "UPDATE petugas SET nama_petugas = :nama_petugas, id_pengguna = :id_pengguna WHERE id_petugas = :id_petugas";
        $this->db->query($query);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('id_pengguna', $data['id_pengguna']);
        $this->db->bind('id_petugas', $data['petugas']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>