<?php

class Contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>perkenalan</h1>";
        echo "nama saya ferdy, saya berumur 19 tahun, saya tinggal di jakarta";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }
}
