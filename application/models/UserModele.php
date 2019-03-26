<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModele extends CI_Model
{
    public $table = 'user';

    public function create_user($infos)
    {
        $this->db->insert($this->table, $infos);
    }

}