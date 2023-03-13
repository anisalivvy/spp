<?php

class Datapembayaran extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Pembayaran";
        $data["datapembayaran"] = $this->model("DataPembayaran_model")->getAllDataPembayaran();
        $this->view("templates/header", $data);
        $this->view("home/admin/datapembayaran/index", $data);
        $this->view("templates/footer", $data);
    }

    public function tambahDataPembayaran()
    {
        if($this->model("DataPembayaran_model")->tambahDataPembayaran($_POST) > 0) {
            header("Location: " . BASE_URL . "datapembayaran/index");
            exit;
        } else{
            header("Location: " . BASE_URL . "datapembayaran/index");
            exit;
        }
    }

    public function hapus($id_pembayaran)
    {
        if($this->model("DataPembayaran_model")->hapusDataPembayaran($id_pembayaran) > 0) {
            header("Location: " . BASE_URL . "datapembayaran/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "datapembayaran/index");
            exit;
        }
    }
}
?>