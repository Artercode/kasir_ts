<!-- didalam helper thidak mengenal perintah CI atau $this -->
<?php

function logged()
{
   $ci = get_instance(); // gunakan get_instance untuk memanggil library codeigniter
   if (!$ci->session->userdata('email')) {
      redirect('auth');
   } else {
      // ambil level_id dari session untuk menentukan level_id yang sedang login
      $level_id = $ci->session->userdata('level_id');
      // mengambil segment1 dari url
      $menu_title = $ci->uri->segment(1);
      // ambil sebaris data dari tabel user_menu berdasarkan menu_tille yang didapat dari segment1
      $queryMenu = $ci->db->get_where('user_menu', ['menu_title' => $menu_title])->row_array();
      // ambil menu_id nya dari data hasil query tabel user_menu
      $menu_id = $queryMenu['menu_id'];
      // buat data array dan cocokan dengan data yang ada di user_access_menu
      $userAkses = $ci->db->get_where('user_access_menu', [
         'level_id'   => $level_id,
         'menu_id'   => $menu_id
      ]);
      // jika < 1 atau tidak ada data yang sama di dalam tabel user_access_menu maka diarakan ke halaman block
      if ($userAkses->num_rows() < 1) {
         redirect('auth/block');
      }
   }
}

// untuk check sesuai dengan tabel
function check_akses($level_id, $menu_id)
{
   $ci = get_instance();
   // $ci->db->get_where('user_access_menu', [
   //    'level_id'  => $level_id,
   //    'menu_id'   => $menu_id
   // ]);
   // atau
   $ci->db->where('level_id', $level_id);
   $ci->db->where('menu_id', $menu_id);
   $result = $ci->db->get('user_access_menu');

   if ($result->num_rows() > 0) {
      return "checked='checked'";
   }
}
