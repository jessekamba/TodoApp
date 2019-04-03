<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insertion_bdd extends CI_Model
{
    public $table = 'tache';

    public function insert_into_bdd($infos)
    {   //insert les taches dans la bdd

        $this->db->insert($this->table, $infos);
    }

    // public function recupere_datas( )
    // {   //affiche toutes les tache de la bdd
    //     return $this->db->get($this->table)->result();
        
    // }

    
    public function recuperer_tache($id_user)
    {  
         //affiche toutes les tache de la bdd en fonction de l'id de l'utilisateur
        $this->db->where('id_user',$id_user);
        $requete= $this->db->get($this->table)->result();
        return $requete;
        
    }

    public function sup_tache($tacheid)
    
    {
        $this->db->where('id',$tacheid);
        $this->db->delete('tache');
    }

   
    public function afficher_tache($idtache)
    { //affiche la tache en fontion de son id
    
     $this->db->where('id',$idtache);
     $req= $this->db->get($this->table);
     return $req->result();
      

    }

    public function modifier_tache($id,$datas)
        //modifie la tache en fonction de son id

    {
        $this->db->where('id',$id);
        $this->db->update($this->table,$datas);
    }
}
 