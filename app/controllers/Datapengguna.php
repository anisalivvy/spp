<?php

class Datapengguna extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Pengguna";
        $data["datapengguna"] = $this->model("Datapengguna_model")->getAllDataPengguna();
        $this->view("templates/header", $data);
        $this->view("home/admin/datapengguna/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tambahDataPengguna()
    {
        var_dump($_POST);
        if($this->model("DataPengguna_model")->tambahDataPengguna($_POST) > 0) {
            header("Location: " . BASE_URL. "datapengguna/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datapengguna/index");
            exit;
        }
    }

    public function hapus($id_pengguna)
    {
        if($this->model("DataPengguna_model")->hapusDataPengguna($id_pengguna) > 0) {
            header("Location: " . BASE_URL . "datapengguna/index");
            exit;
        } else{
            header("Location: " . BASE_URL . "datapengguna/index");
            exit;
        }
    }
}
?>