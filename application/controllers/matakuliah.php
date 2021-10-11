<?php

class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_matkul');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'kode matakuliah',
            'required|min_length[3]',
            [
                'required' => "parah, kode mata kuliahnya kagak diisi",
                'min_length' => "kode mata kuliahnya kependekan bos"
            ]
        );
        $this->form_validation->set_rules(
            'mahasiswa',
            'nama mahasiwa',
            'required',
            [
                'required' => "nama mahasiswanya siapa?"
            ]
        );
        $this->form_validation->set_rules(
            'nim',
            'nomor induk mahasiswa',
            'required|min_length[8]',
            [
                'required' => "parah, nomor induk mahasiswanya kagak diisi",
                'min_length' => "nomor induk mahaiswanya kependekan bos"
            ]
        );
        $this->form_validation->set_rules(
            'tanggal',
            'tanggal lahir',
            'required',
            [
                'required' => "parah, tanggal lahirya kagak diisi",
            ]
        );
        $this->form_validation->set_rules(
            'matkul',
            'nama matakuliah',
            'required',
            [
                'required' => "parah, nama mata kuliahnya kagak diisi",
            ]
        );
        $this->form_validation->set_rules(
            'sks',
            'sistem kredit semester',
            'required',
            [
                'required' => "parah, sks nya kagak diisi",
            ]
        );
        $this->form_validation->set_rules(
            'dosen',
            'dosen matakuliah',
            'required',
            [
                'required' => "nama dosen nya kagak lo isi?",
            ]
        );
        if ($this->form_validation->run() == False) {
            $this->load->view('view_matkul');
        } else {
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
}
