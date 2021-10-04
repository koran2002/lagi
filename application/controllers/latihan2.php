<?php
defined('BASEPATH') or exit('No direct script access allowed');

class latihan2 extends CI_Controller
{
    // hanya menggunakan controller
    public function index()
    {
        echo "selamat datang, belajar web programing 2 ";
    }
    // tidak pakai model
    public function penjumlahan()
    {
        $nilai1 = 10;
        $nilai2 = 23;

        $jumlah = $nilai1 + $nilai2;

        echo "hasil penjumlahan " . $nilai1 . " + " . $nilai2 . " = " . $jumlah;
    }
    // pakai model
    public function jumlah2()
    {
        $this->load->model('model_latihan');
        $akhir = $this->model_latihan->hasil();

        echo "hasil penjumlahan " . $akhir;
    }
    // pakai model + parameter
    public function jumlah3($n1, $n2)
    {
        $this->load->model('model_latihan');
        $akhir = $this->model_latihan->hasil2($n1, $n2);

        echo "hasil penjumlahan " . $akhir;
    }

    // pakai model + parameter + view
    public function jumlah4($n1, $n2)
    {
        $this->load->model('model_latihan');
        $akhir = $this->model_latihan->hasil3($n1, $n2);

        $data['hasilnilai'] = $akhir;

        $this->load->view('view_latihan1', $data);
    }
}
