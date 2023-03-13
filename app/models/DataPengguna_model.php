<?php

class datapengguna_model{
    private $table = 'pengguna';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllDataPengguna()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getDataPenggunaById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->resultSingle();
    }

    public function tambahDataPengguna($data)
    {
        $query = "INSERT INTO pengguna (username, password, role) VALUES (:username, :password, :role)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPengguna($id_pengguna)
    {
        $query = "DELETE FROM {$this->table} WHERE id_pengguna=:id_pengguna";
        $this->db->query($query);
        $this->db->bind('id_pengguna', $id_pengguna);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>