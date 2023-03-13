<?php
class Datasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data["datasiswa"] = $this->model("DataSiswa_model")->getAllDataSiswa();
        $data["kelas"] = $this->model("Kelas_model")->getAllKelas();
        $data["datapengguna"] = $this->model("DataPengguna_model")->getAllDataPengguna();
        $data["datapembayaran"] = $this->model("DataPembayaran_model")->getAllDataPembayaran();
        $this->view("templates/header", $data);
        $this->view("home/admin/datasiswa/index", $data); //berarti isi data
        $this->view("templates/footer", $data);
    }

    public function tambahDataSiswa()
    {
        if($this->model("DataSiswa_model")->tambahDataSiswa($_POST) > 0) {
            header("Location: ". BASE_URL . "datasiswa/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datasiswa/index");
            exit;
        }
    }

    public function hapus($id_siswa)
    {
        if($this->model("DataSiswa_model")->hapusDataSiswa($id_siswa) > 0) {
            header("Location: " . BASE_URL . "datasiswa/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datasiswa/index");
            exit;
        }
    }
}
?>