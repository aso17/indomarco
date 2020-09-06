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
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times', 'U', 12);

        $pdf->SetTitle('Laporan  ' . $tgl1 . ' sampai ' . $tgl2);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 

        $pdf->Cell(190, 7, 'PT.INDOMARCO PRISMATAMA', 0, 1, 'L');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'G026-Tangerang 1', 0, 1, 'L');
        //$pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, ' LAPORAN FISIK TIDAK ADA', 0, 1, 'C');
        $pdf->Setfont('Arial', 'B', 12);
        $pdf->Cell(190, 7, date('l,d/m/y'), 0, 1, 'C');
        $pdf->Cell(190, 7, 'User :' . $this->session->userdata('nik'), 0, 1, 'R');




        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        //lebar,tinggi,br
        $pdf->Cell(7, 6, 'No', 1, 0);
        $pdf->Cell(45, 6, 'Nama Toko', 1, 0);
        $pdf->Cell(30, 6, 'NAMA As', 1, 0);
        $pdf->Cell(15, 6, 'NO TTD', 1, 0);
        $pdf->Cell(20, 6, 'NO NRB', 1, 0);
        $pdf->Cell(20, 6, 'TGL Input', 1, 0);
        $pdf->Cell(30, 6, 'Keterangan', 1, 0);
        $pdf->Cell(30, 6, 'Nama Driver', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $nofisik = $this->Laporan_model->getAll($tgl1, $tgl2);
        $i = 1;
        foreach ($nofisik as $row) {
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(45, 6, $row->nama_toko, 1, 0);
            $pdf->Cell(30, 6, $row->nama_as, 1, 0);
            $pdf->Cell(15, 6, $row->no_ttd, 1, 0);
            $pdf->Cell(20, 6, $row->no_nrb, 1, 0);
            $pdf->Cell(20, 6, $row->tgl_input, 1, 0);
            $pdf->Cell(30, 6, $row->keterangan, 1, 0);
            $pdf->Cell(30, 6, $row->nama_driver, 1, 1);
        }
        $pdf->Output();
    }
    public function cetak_excel($tgl1, $tgl2)
    {
        include_once APPPATH . '/third_party/xlsxwriter.class.php';
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        error_reporting(E_ALL & ~E_NOTICE);

        $filename = "report-" . date('d-m-Y-H-i-s') . ".xlsx";
        header('Content-disposition: attachment; filename="' . XLSXWriter::sanitize_filename($filename) . '"');
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        $styles = array('widths' => [3, 20, 30, 40], 'font' => 'Arial', 'font-size' => 10, 'font-style' => 'bold', 'fill' => '#eee', 'halign' => 'center', 'border' => 'left,right,top,bottom');
        $styles2 = array(['font' => 'Arial', 'font-size' => 10, 'font-style' => 'bold', 'fill' => '#eee', 'halign' => 'left', 'border' => 'left,right,top,bottom', 'fill' => '#ffc'], ['fill' => '#fcf'], ['fill' => '#ccf'], ['fill' => '#cff'],);

        $header = array(
            'No' => 'integer',
            'Nama toko' => 'string',
            'Nama As' => 'string',
            'No Ttd' => 'string',
            'No Nrb' => 'string',
            'Tgl Input' => 'string',
            'Keterangan' => 'string',
            'Nama Driver' => 'string',
        );

        $writer = new XLSXWriter();
        $writer->setAuthor('Manusia');

        $writer->writeSheetHeader('Sheet1', $header, $styles);
        $no = 1;
        $nofisik = $this->Laporan_model->getAllexcel($tgl1, $tgl2);

        foreach ($nofisik as $r) {
            $writer->writeSheetRow('Sheet1', [$no, $r->nama_toko, $r->nama_as, $r->no_ttd, $r->no_nrb, $r->tgl_input, $r->keterangan, $r->nama_driver,], $styles2);
            $no++;
        }
        $writer->writeToStdOut();
    }
}
