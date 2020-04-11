<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function data_pegawai()
   {
      $pegawai = $this->db->get_where('pegawai', ['username' => $this->session->userdata('username')])->row_array();
      $data['title']    = 'Data Pegawai';
      $data['pegawai']  = $pegawai;
      $data['page']     = 'pegawai/data_pegawai';
      $this->view($data);
   }

   public function editFoto()
   {
      $data['pegawai'] = $this->db->get('pegawai', ['username' => $this->session->userdata('username')])->row_array();
      // var_dump($data);
      // die;
      // $_FILES akan automatis terisi setelah klik edit dan ada file yang diupload
      // jika $_FILES ada isinya atau ada file yang diupload maka...
      $upload_image = $_FILES['foto']['name'];
      if ($upload_image) {
         // $config = [
         //    'allowed_types'     => 'jpg|gif|png|jpeg|JPG|PNG',
         //    'max_size'          => '1024',
         //    'max_width'         => '0',
         //    'max_height'        => '0',
         //    'file_ext_tolower'  => true,
         //    'upload_path'       => './images/pegawai/',
         // ];
         //atau - kedua-duanya menghasilkan type array
         $config['allowed_types']      = 'gif|jpg|png';
         $config['max_size']           = '1024';
         $config['max_height']         = '0';
         $config['max_width']          = '0';
         $config['file_ext_tolower']   = TRUE;
         $config['upload_path']        = './images/pegawai/';

         $this->load->library('upload', $config);
         if ($this->upload->do_upload('foto')) {
            $foto_lama = $data['pegawai']['foto']; // ambil foto lama dari tabel pegawai kolom foto
            // jika foto lama tidak sama dengan avatar.jpg maka hapus foto lama
            if ($foto_lama != 'avatar.jpg') {
               unlink(FCPATH . './images/pegawai/' . $foto_lama);
            }
            $foto_baru = $this->upload->data('file_name');
            $this->db->set('foto', $foto_baru); // set foto dengan $foto_baru
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('pegawai'); // update tabel pegawai sesuai dengan username nya...
            $this->session->set_flashdata('success', 'Foto berhasil diedit!');
            redirect('pegawai/data_pegawai');
         } else {
            echo $this->upload->display_errors();
         }
      }
   }
}
