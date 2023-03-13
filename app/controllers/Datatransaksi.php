<?php

class Datatransaksi extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Transaksi";
        $data["datatransaksi"] = $this->model("DataTransaksi_model")->getAllDataTransaksi();
        $this->view("templates/header", $data);
        $this->view("home/admin/datatransaksi/index", $data);
        $this->view("templates/footer", $data);
    }
}