<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_harga_jual extends MY_Controller
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
         $input = (object) $this->jual_harga_jual->getValuesHargaJual(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Harga Jual';
      $data['input']       = $input;
      $data['content']     = $this->jual_harga_jual->paginate($page)->orderBy('id', 'desc')->get();
      $data['total_rows']  = $this->jual_harga_jual->count(); // total baris data
      $data['pagination']  = $this->jual_harga_jual->makePagination(
         base_url('jual_harga_jual'), // jika pakai index - setting ada di routes.php
         2, // segment url untuk halaman pagination)
         $data['total_rows']
      );
      $data['page']        = 'jual/harga_jual';

      return $this->view($data);
   }

   public function search($page = null)
   {
      if (isset($_POST['keyword'])) {
         $this->session->set_userdata('keyword', $this->input->post('keyword'));
      } else {
         redirect(base_url('sett_harga_jual'));
      }

      $keyword = $this->session->userdata('keyword');
      $data['title']      = 'Harga Jual';
      $data['content']    = $this->sett_harga_jual->like('title', $keyword)->paginate($page)->get();
      // total seluruh data dalam tabel dat_harga_jual
      $data['total_rows'] = $this->sett_harga_jual->like('title', $keyword)->count();
      $data['pagination'] = $this->sett_harga_jual->makePagination(
         base_url('sett_harga_jual/search'),
         2,
         $data['total_rows']
      );
      $data['page']       = 'setting/harga_jual';

      $this->view($data);
   }

   public function reset() // untuk menghapus keyword jika sudak tidak digunakan
   {
      $this->session->unset_userdata('keyword');
      redirect(base_url('sett_harga_jual'));
   }
}
