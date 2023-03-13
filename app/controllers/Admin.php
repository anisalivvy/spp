<?php
class Admin extends Controller
{
    public function index()
    {
        $data["judul"] = "Admin";
        $this->view("templates/header", $data);
        $this->view("home/index", $data); //berarti isi data
        $this->view("templates/footer", $data);
    }
}
?>