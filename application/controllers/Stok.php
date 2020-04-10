<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function stok_item()
   {
      $pegawai = $this->db->get('pegawai', ['username' => $this->input->post('username')])->row_array();
      $data['title']    = 'Stok Item';
      $data['pegawai']  = $pegawai;

      $data['page']     = 'stok/stok_item';
      $this->view($data);
   }

   // #################### kategori ###########################################################
   public function kategori($page = null)
   {
      if (!$_POST) {
         $input = (object) $this->stok->getValuesKategori(); // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      $pegawai = $this->db->get('pegawai', ['username' => $this->input->post('username')])->row_array();

      $data['title']       = 'Kategori';
      $data['pegawai']     = $pegawai;
      $data['input']       = $input;
      $data['form_action'] = base_url('stok/tambah_kategori');
      $data['content']    = $this->stok->paginate($page)->get();
      $data['total_rows'] = $this->stok->count(); // total data dalam tabel sto_kategori
      // 3 parameter untuk membuat pagination 
      $data['pagination'] = $this->stok->makePagination(
         base_url('stok/kategori'),
         3, // mengarahkan ke halaman pagination yang ada di url)
         $data['total_rows']
      );
      $data['page']        = 'stok/kategori';
      return $this->view($data);
   }

   public function tambah_kategori()
   {
      // untuk mengembalikan inputan terakir == set_value
      if (!$_POST) {
         $input = (object) $this->stok->getValuesKategori();  // stok_model
      } else {
         $input = (object) $this->input->post(null, true);
      }

      if (!$this->stok->validate()) {
         $data['input']          = $input;
         $data['form_action']    = base_url('stok/tambah_kategori');
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
      // stok_model - public $table = 'stok_kategori'; (harus ada untuk menentukan tabel yg digunakan)
      $kategori   = $this->stok->where('slug', $slug)->first();

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
