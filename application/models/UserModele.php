<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModele extends CI_Model
{
    public $table = 'user';

    public function create_user($infos)
    {
        $this->db->insert($this->table, $infos);
    }

    public function check_user($data)
    {
        $this->db->where($data);
        $query = $this->db->get($this->table);
        $resultat = $query->result();
        return  $resultat;
    }

}