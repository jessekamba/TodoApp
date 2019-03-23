<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insertion_bdd extends CI_Model
{
    public $table = 'tache';

    public function insert_into_bdd($infos)
    {
        $this->db->insert($this->table, $infos);
    }

    public function recupere_datas( )
    {
        return $this->db->get($this->table)->result();
        
    }

    public function sup_tache($tacheid)
    
    {
        $this->db->where('id',$tacheid);
        $this->db->delete('tache');
    }

    public function afficher_tache($idtache)
    {
    
     $this->db->where('id',$idtache);
     $req= $this->db->get($this->table);
     return $req->result();
      

    }
}
 