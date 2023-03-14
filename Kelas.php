<?php
class Kelas extends Controller
{
    public function index()
    {
        $data["judul"] = "Kelas";
        $data["kelas"] = $this->model("Kelas_model")->getAllKelas();
        $this->view("templates/header", $data);
        $this->view("home/admin/kelas/index", $data); //berarti isi data
        $this->view("templates/footer", $data);
    }

    public function tambahDataKelas() {
        var_dump($_POST);
        if($this->model("Kelas_model")->tambahDataKelas($_POST) > 0){
            header("Location: " . BASE_URL . "kelas/index");
            exit;
        } else{
            header("Location: " . BASE_URL . "kelas/index");
            exit;
        }
    }

   public function hapus($id_kelas) {
        // var_dump($_POST);
        if($this->model("Kelas_model")->hapusDataKelas($id_kelas) > 0){
            header("Location: " . BASE_URL . "kelas/index");
            exit;
        } else{
            header("Location: " . BASE_URL . "kelas/index");
            exit;
        }
    }

    public function edit($id_kelas)
    {
        $data["judul"] = "Kelas";
        $data["kelas"] = $this->model("Kelas_model")->getKelasById($id_kelas);
        $this->view("templates/header", $data);
        $this->view("home/admin/kelas/edit", $data);
        $this->view("templates/footer", $data);
    }
    

     public function prosesEditKelas()
    {
        var_dump($_POST);
        if ($this->model("Kelas_model")->editKelas($_POST) > 0) {
            header("Location: " . BASE_URL . "kelas/index");
            exit;
        } else {
            header("Location: " . BASE_URL . "kelas/index");
            exit;
        }
    }

    
}

?>