<?php

class Pengguna_model
{
    private $table ="pengguna";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengguna()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }

    public function getPenggunaByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username ");
        $this->db->bind("username", $username);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authPenggunaByUsernamePassword($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username AND password = :password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>