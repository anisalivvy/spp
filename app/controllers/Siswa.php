<?php
class Siswa extends Controller
{
    public function index()
    {
        $data["judul"] = "Siswa";
        $this->view("home/dashboard_siswa", $data); //berarti isi data
    }
}
?>