<?php

class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_matkul');
    }

    public function cetak()
    {
        $mahasiswa = $this->input->POST('mahasiswa', true);
        $nim = $this->input->POST('nim', true);
        $tanggal = $this->input->POST('tanggal', true);
        $kelamin = $this->input->POST('kelamin', true);
        $kode = $this->input->POST('kode', true);
        $matkul = $this->input->POST('matkul', true);
        $sks = $this->input->POST('sks', true);
        $dosen = $this->input->POST('dosen', true);

        $data = [
            'mahasiswa' => $mahasiswa,
            'nim' => $nim,
            'tanggal' => $tanggal,
            'kelamin' => $kelamin,
            'kode' => $kode,
            'matkul' => $matkul,
            'sks' => $sks,
            'dosen' => $dosen
        ];

        $this->load->view('hasil', $data);
    }
}
