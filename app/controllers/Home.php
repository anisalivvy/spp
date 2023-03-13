<?php
class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Home";
        $this->view("templates/header", $data);
        $this->view("home/index", $data); //berarti isi data
        $this->view("templates/footer", $data);
    }
}
?>