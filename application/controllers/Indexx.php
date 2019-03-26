<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexx extends CI_Controller {

	 
	public function index()
	{	//affiche la page d'acceuil
		// $this->load->view('acceuil');
		$this->load->model('insertion_bdd');
		$donnee ['tache']=$this->insertion_bdd->recupere_datas();
		$this->load->view('acceuil',$donnee);
	}

	public function lien_nouvelle_tache()
	{
		$this->load->view('nouvelle_tache.php');
	}

	public function insertion()
		/// verifie si les champs sont remplis et si la taille correspond a celle specifiee puis rentre dans la bdd
		{
		$this->form_validation->set_rules('description','description', 'required|min_length[5]',
		array('required' => 'La description de la tache est obligatoire',
			'min_length' => '5 caractères minimum'));

		$this->form_validation->set_rules('date_debut', 'date_debut', 'required|min_length[10]',
			array('required' => 'la date de debut de la tache est obligatoire',
				'min_length' => ' votre tache doit avoir une date de debut'));
		
		$this->form_validation->set_rules('date_fin', 'date_fin', 'required|min_length[10]',
				array('required' => 'la date de la fin de la tache est obligatoire',
					'min_length' => ' votre tache doit avoir une date de fin'));
		if($this->form_validation->run())
		{

			$description=$this->input->post('description');
			$date_debut=$this->input->post('date_debut');
			$date_fin=$this->input->post('date_fin');

			$datas= array(
				'date_debut'=>$date_debut,
				'date_fin'=>$date_fin,
				'description'=>$description

			);
			$this->load->model('insertion_bdd');
			$this->insertion_bdd->insert_into_bdd($datas);
			$this->load->view('creation_tache_success');
		}

		else
        {
            $this->load->view('nouvelle_tache');
        }

	}

	public function retour ()
	{
		$this->load->view('acceuil');
	}

	public function liste_taches()
	{
		$this->load->view('liste_taches');
	}

	public function select_data()
	{	//affiche les taches se trouvant dans la bdd sur la view liste_taches
		$this->load->model('insertion_bdd');
		$donnee ['tache']=$this->insertion_bdd->recupere_datas();
		 $this->load->view('liste_taches',$donnee);
	}

	public function sup_tache()
	//

	{   //supprime la tache selectionnee
		$idtache = $this -> uri -> segment(3);
		$this -> load -> model('insertion_bdd');
		$this -> insertion_bdd->sup_tache($idtache);
		echo ('tache supprimée avec succes');

		echo ('<a href="'.site_url('indexx/index').'">&nbspRetour a page d\'acceuil</a>');
	

		// redirect('indexx/select_data');

	}

	public function conf_supp_tache()
	//affiche la tache lors de la suppression
	{
		$idtache = $this -> uri -> segment(3);
		$this->load->model('insertion_bdd');
		$resultat['res']=$this->insertion_bdd->afficher_tache($idtache);
		$this->load->view('confirmation_supp_tache',$resultat);

	}

	public function lien_modifier_tache()
	{
		$id=$_GET['id'];
	 
		$this->load->view('modifier_tache.php');
	}

	public function conf_modif_tache()
	{
		#todo
		$idtache = $this -> uri -> segment(3);
		$this->load->model('insertion_bdd');
		$resultat['res']=$this->insertion_bdd->afficher_tache($idtache);
		$this->load->view('conf_modif_tache',$resultat);
	
	}


	public function modif_tache()
	{
		 $id=$_GET['id'];
		$description=$this->input->post('description');
			$date_debut=$this->input->post('date_debut');
			$date_fin=$this->input->post('date_fin');

			$datas= array(
				'date_debut'=>$date_debut,
				'date_fin'=>$date_fin,
				'description'=>$description

			);
			$this->load->model('insertion_bdd');
			$this->insertion_bdd->modifier_tache($id,$datas);
			echo "tache modifiée avec succes";
			 


	}

		
	
 
	 
}
           
        
       
