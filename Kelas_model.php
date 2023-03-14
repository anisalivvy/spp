<?php
class kelas_model {
    private $table = 'kelas';
    private $db;

    public function __construct() 
    {
        $this->db = new Database;
    }

    public function getAllKelas() 
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getKelasById($id_kelas) 
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_kelas=:id_kelas ");
        $this->db->bind('id_kelas', $id_kelas);
        return $this->db->resultSingle();
    }

    public function tambahDataKelas($data)
    {
        $query = "CALL insert_kelas(:namakelas, :kompetensi_keahlian)";
        
        $this->db->query($query);
        $this->db->bind('namakelas', $data['namakelas']);
        $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editKelas($data)
    {
        $query = 'CALL update_kelas(:id_kelas, :nama_kelas, :kompetensi_keahlian)';

        $this->db->query($query);
        $this->db->bind("id_kelas", $data["id_kelas"]);
        $this->db->bind("nama_kelas", $data["nama_kelas"]);
        $this->db->bind("kompetensi_keahlian", $data["kompetensi_keahlian"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataKelas($id_kelas)
    {
        $query = 'CALL delete_kelas(:idkelas)';
        // $query = "DELETE FROM $this->table WHERE id_kelas = :id_kelas";
        $this->db->query($query);
        $this->db->bind('idkelas', $id_kelas);

        $this->db->execute();

        return $this->db->rowCount();
    }
 }
?>