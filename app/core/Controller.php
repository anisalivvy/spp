<?php
class Controller
{
    public function view($view, $data = [])
    {
        require_once "../app/views/" . $view . ".php";
    }

    public function model($model) //isi () = nama model yang mau dipake
    {
        require_once "../app/models/" . $model . ".php";
        return new $model;
    }
}