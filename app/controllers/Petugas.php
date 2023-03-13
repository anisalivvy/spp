<?php
class Petugas extends Controller
{
    public function index()
    {
        $data["judul"] = "Petugas";
        $this->view("home/dashboard_petugas", $data); //berarti isi data
        
    }
}
?>