<?php

class Login extends Controller {
    public function index() {
        if(isset($_SESSION['user'])) 
        {
            header('Location: ' . BASE_URL);
            exit;
        }
        $this->view('auth/login');
    }
            
        public function prosesLogin() {
        $pengguna = $this->model("Pengguna_model")->getPenggunaByUsername($_POST["username"]);
        //var_dump($pengguna);die;
        // echo "jalann";
        // var_dump($pengguna);
        // die;
        if ($pengguna) 
            {
                
                if ($pengguna["role"] == "admin") {
                    // echo "admin";
                header("Location: " . BASE_URL . 'admin');
                } else if ($pengguna["role"] == "petugas") {
                header("Location: " . BASE_URL . 'petugas');
                } else if ($pengguna["role"] == "siswa") {
                header("Location: " . BASE_URL . 'siswa');
                }

                echo 'gagal login';
            }
        }
    }
?>