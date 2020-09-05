<?php
class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login/index');
            if (!$this->session->userdata('jabatan') == 1) {
            } else {
                redirect('home');
            }
        }
        $this->load->model('clastertoko_model');
        $this->load->model('Area_model');
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pdf');
    }
    public function index()
    {
        $judul['judul'] = 'Laporan';
        $this->load->view('templates/header', $judul);
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
    }
    public function lap_nofisik()
    {
        $judul['judul'] = 'Laporan';
        $this->load->view('templates/header', $judul);
        $this->load->view('laporan/lap_nofisik');
        $this->load->view('templates/footer');
    }
    public function cetak_tgl()
    {
        $judul['judul'] = 'Laporan';
        $data['nofisik'] = $this->Laporan_model->getAll($_POST['tgl_1'], $_POST['tgl_2']);
        $data['tgl1'] = $_POST['tgl_1'];
        $data['tgl2'] = $_POST['tgl_2'];
        $this->load->view('templates/header', $judul);
        $this->load->view('laporan/cetak_tgl', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_pdf($tgl1, $tgl2)
    {
        $this->load->library('pdf');
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->SetTitle('Laporan apa gitu tanggal ' . $tgl1 . ' sampai ' . $tgl2);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'PT.INDOMARCO PRISMATAMA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, ' lAPORAN', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        //lebar,tinggi,br
        $pdf->Cell(50, 6, 'Nama Toko', 1, 0);
        $pdf->Cell(30, 6, 'NAMA As', 1, 0);
        $pdf->Cell(15, 6, 'NO TTD', 1, 0);
        $pdf->Cell(20, 6, 'NO NRB', 1, 0);
        $pdf->Cell(20, 6, 'TGL Input', 1, 0);
        $pdf->Cell(30, 6, 'Keterangan', 1, 0);
        $pdf->Cell(30, 6, 'Nama Driver', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $nofisik = $this->Laporan_model->getAll($tgl1, $tgl2);
        foreach ($nofisik as $row) {
            $pdf->Cell(50, 6, $row->nama_toko, 1, 0);
            $pdf->Cell(30, 6, $row->nama_as, 1, 0);
            $pdf->Cell(15, 6, $row->no_ttd, 1, 0);
            $pdf->Cell(20, 6, $row->no_nrb, 1, 0);
            $pdf->Cell(20, 6, $row->tgl_input, 1, 0);
            $pdf->Cell(30, 6, $row->keterangan, 1, 0);
            $pdf->Cell(30, 6, $row->nama_driver, 1, 1);
        }
        $pdf->Output();
    }
}
