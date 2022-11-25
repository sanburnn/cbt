<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cbt_dashboard_model extends CI_Model{
    public function jumlah_siswa()
        {
            return $this->db->query("SELECT count(user_id) user FROM cbt_user")->row();
        }
        function get_user_count_by_level($level){
            $this->db->select('COUNT(user_id)')
                     ->where('level', $level)
                     ->from('user');
            return $this->db->get();
        }
}