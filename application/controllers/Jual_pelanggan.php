<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_pelanggan extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      // logged();
      $this->load->library('form_validation');
   }

   public function index($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->jual_pelanggan->getValuesJualPelanggan(); // _model.php
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Pelanggan';
      $data['input']       = $input;
      $data['content']     = $this->jual_pelanggan->paginate($page)->get();
      $data['total_rows']  = $this->jual_pelanggan->count(); // total baris data
      $data['pagination']  = $this->jual_pelanggan->makePagination(
         base_url('jual_pelanggan'), // jika pakai index - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'jual/pelanggan';

      return $this->view($data);
   }

   public function search($page = null)
   {
      if (isset($_POST['keyword'])) {
         $this->session->set_userdata('keyword', $this->input->post('keyword'));
      } else {
         redirect(base_url('Jual_pelanggan'));
      }

      $keyword = $this->session->userdata('keyword');
      $data['title']      = 'Harga Jual';
      $data['content']    = $this->Jual_pelanggan->like('title', $keyword)->paginate($page)->get();
      // total seluruh data dalam tabel dat_harga_jual
      $data['total_rows'] = $this->Jual_pelanggan->like('title', $keyword)->count();
      $data['pagination'] = $this->Jual_pelanggan->makePagination(
         base_url('Jual_pelanggan/search'),
         2,
         $data['total_rows']
      );
      $data['page']       = 'jual/pelanggan';

      $this->view($data);
   }

   public function reset() // untuk menghapus keyword jika sudak tidak digunakan
   {
      $this->session->unset_userdata('keyword');
      redirect(base_url('Jual_pelanggan'));
   }
}
