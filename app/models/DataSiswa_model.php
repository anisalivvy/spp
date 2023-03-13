<?php
class datasiswa_model{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataSiswa()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        // $this->db->query("SELECT siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
        return $this->db->resultSet();
    }

    public function getDataSiswaById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa (nisn, nis, nama, alamat, telepon, id_kelas, id_pengguna, id_pembayaran) VALUES (:nisn, :nis, :nama, :alamat, :telepon, :id_kelas, :id_pengguna, :id_pembayaran)";
        
        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('id_pengguna', $data['id_pengguna']);
        $this->db->bind('id_pembayaran', $data['id_pembayaran']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id_siswa)
    {
        $query = "DELETE FROM {$this->table} WHERE id_siswa = :id_siswa";
        // $query = "DELETE FROM $this->table WHERE id_kelas = :id_kelas";
        $this->db->query($query);
        $this->db->bind('id_siswa', $id_siswa);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>