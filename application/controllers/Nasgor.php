<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Nasgor extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['judul'] = "Halaman Depan";
    $this->load->view('ng_header', $data);
    $this->load->view('ng_index', $data);
    $this->load->view('ng_footer', $data);
  }
  public function pemesanan()
  {
    $data['judul'] = "Halaman Pemesanan";
    $this->load->view('ng_header', $data);
    $this->load->view('ng_pemesanan', $data);
    $this->load->view('ng_footer', $data);
  }
  public function simpan_pesanan()
  {
    // Memeriksa apakah data formulir telah dikirimkan
    $data['judul'] = "Cetak Data Pesanan";
    $this->load->view('ng_header', $data);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $data['nama'] = $this->input->post("nama");
      $data['menu'] = $this->input->post("menu");
      $data['jumlah_pesanan'] = $this->input->post("jumlah_pesanan");

      // Menentukan harga menu berdasarkan nilai "menu"
      $data['harga_menu'] = 0;
      if ($data['menu'] === "Nasi Goreng Ayam") {
        $data['harga_menu'] = 20000;
      } elseif ($data['menu'] === "Nasi Goreng Udang") {
        $data['harga_menu'] = 30000;
      } elseif ($data['menu'] === "Nasi Goreng Sosis") {
        $data['harga_menu'] = 25000;
      } elseif ($data['menu'] === "Nasi Goreng Ati Ampela") {
        $data['harga_menu'] = 25000;
      }

      $data['harga_total'] = $data['harga_menu'] * $data['jumlah_pesanan'];

      // Memuat tampilan dengan data pesanan
      $this->load->view('cetak_pesanan', $data);
      

      // Memuat footer atau bagian bawah halaman jika diperlukan
      $this->load->view('ng_footer', $data);
    }
  }
}
