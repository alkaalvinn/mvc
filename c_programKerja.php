<?php
include_once("m_programKerja.php");
class c_programKerja
{
    public $model;
    public function __construct($nomor,$nama,$SK)
    {
        $this->model = new m_programKerja($nomor,$nama,$SK);
        $this->model->setProgramKerja($nomor,$nama,$SK);
    }
    public function invoke()
    {
        $proker =
            $this->model->getSemuaProgramKerja();
        include 'v_programKerja.php';
    }
}
