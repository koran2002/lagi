<?php

class model_latihan extends CI_model
{
    public function hasil()
    {
        $nilai1 = 10;
        $nilai2 = 23;

        $hasil = $nilai1 + $nilai2;

        return $hasil;
    }

    public function hasil2($n1, $n2)
    {
        $nilai1 = $n1;
        $nilai2 = $n2;

        $hasil = $nilai1 + $nilai2;

        return $hasil;
    }

    public function hasil3($n1, $n2)
    {
        $nilai1 = $n1;
        $nilai2 = $n2;

        $hasil = $nilai1 + $nilai2;

        return $hasil;
    }
}
