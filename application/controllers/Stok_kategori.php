<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_kategori extends MY_Controller
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
         $input = (object) $this->stok_kategori->getValuesStokKategori(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $data['title']       = 'Kategori';
      $data['input']       = $input;
      $data['form_action'] = base_url('stok_kategori/tambah_kategori');
      $data['content']    = $this->stok_kategori->paginate($page)->get();
      $data['total_rows'] = $this->stok_kategori->count(); // total baris data dalam tabel
      $data['pagination'] = $this->stok_kategori->makePagination(
         base_url('stok_kategori'),
         2, // mengarahkan ke halaman pagination yang ada di url)
         $data['total_rows']
      );
      $data['page']        = 'stok/kategori';
      return $this->view($data);
   }

   public function tambah_kategori()
   {
      // untuk mengembalikan inputan terakir == set_value
      if (!$_POST) {
         $input = (object) $this->stok_kategori->getValuesStokKategori();  // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      if (!$this->stok->validate()) {
         $data['input']          = $input;
         $data['form_action']    = base_url('stok_kategori/tambah_kategori');
         $data['page']           = 'stok/kategori';

         $this->view($data);
         return;
      }
      // if ($this->stok->create($input)) {
      if ($this->db->insert('stok_kategori', $input)) {
         $this->session->set_flashdata('success', 'Data berhasil disimpan');
      } else {
         $this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
      }
      redirect(base_url('stok/kategori'));
   }

   public function unique_slug()
   {
      $slug       = $this->input->post('slug');
      $id         = $this->input->post('id');
      // public $table = 'stok_kategori'; (set table) - stok_kategori_model.php
      $kategori   = $this->stok_kategori->where('slug', $slug)->first();

      if ($kategori) {
         if ($id = $kategori->id) {
            return true;
         }
         $this->load->library('form_validation');
         $this->form_validation->set_message('unique_slug', '%s sudah digunakan!');
         return false;
      }
      return true;
   }
}
