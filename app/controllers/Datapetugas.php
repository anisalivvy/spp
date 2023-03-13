<?php

class Datapetugas extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Petugas";
        $data["datapetugas"] = $this->model("DataPetugas_model")->getAllDataPetugas();
        $data["datapengguna"] = $this->model("DataPengguna_model")->getAllDataPengguna();
        $this->view("templates/header", $data);
        $this->view("home/admin/datapetugas/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tambahDataPetugas()
    {
        var_dump($_POST);
        if($this->model("DataPetugas_model")->tambahDataPetugas($_POST) > 0) {
            header("Location: " . BASE_URL . "datapetugas/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datapetugas/index");
            exit;
        }
    }

    public function hapus($id_petugas)
    {
        if($this->model("DataPetugas_model")->hapusDataPetugas($id_petugas) > 0) {
            header("Location: " . BASE_URL . "datapetugas/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datapetugas/index");
            exit;
        }
    }

    public function ubah()
    {
        var_dump($_POST);
        if($this->model("DataPetugas_model")->ubahDataPetugas($_POST) > 0) {
            header("Location: " . BASE_URL . "datapetugas/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datapetugas/index");
            exit;
        }
    }
}
?>