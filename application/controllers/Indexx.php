<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexx extends CI_Controller {

	 
	public function index()
	{	//affiche la page d'acceuil
		
		$this->load->view('SeConnecterView');
	}

	public function charger_vue_se_creer_compte()
	{
			$this->load->view('CreateAccountView');
	}

	public function charger_acceuil()
	{
		$this->load->view('AcceuilUserView');
	}

	public function charvier_vue_listeTache()
	{
		$this->load->view('liste_tacheView');
	}
	public function charger_vue_AcceuilUserView()

	{		
		
		if($this->session->connected)
		{
			$id_user = $this->session->id;
			$this->load->model('UserModele');
			$tache = $this->UserModele-> check_user($id_user);
		    $this->load->view('AcceuilUserView');
		}
	}
	public function add_user()

	{	
		$this->form_validation->set_rules('pseudo','pseudo', 'required|min_length[5]',
		array('required' => 'Veuillez entrer un pseudo',
			  'min_length' => '5 caractères minimum'));

		$this->form_validation->set_rules('mdp','mdp', 'required|min_length[5]',
		array('required' => 'Veuillez entrer un mot de passe',
			  'min_length' => '5 caractères minimum'));
			  
		$this->form_validation->set_rules('mdpConf', 'mdpConf', 'matches[mdp]',
			  array('matches' => 'Mot de passe incohérent'));

		if($this->form_validation->run()) 
	 
		{	 
				
				$pseudo=$this->input->post('pseudo');
				$mdp=$this->input->post('mdp');
				$mdpconf = $this->input->post('mdpconf');
				$datas= array(
				'pseudo'=>$pseudo,
				'mdp'=>$mdp
				);

				$this->load->model('UserModele');
				$check = $this->UserModele->check_user($datas);
	
				if(count($check) > 0)
				{  
					echo '<script>alert("Login deja utilisé");</script>';
					$this->load->view('CreateAccountView');
				}
				else
				{	
					$this->load->model('UserModele');
					$this->UserModele->create_user($datas);
					redirect('indexx/select_data');
				}

		}
	  	else
		  {
			$this->load->view('CreateAccountView');
		  }

	}

	public function authentification()
	{
		
		$pseudo=$this->input->post('pseudo');
		$mdp=$this->input->post('mdp');
		
		$datas= array(
			'pseudo'=>$pseudo,
			 'mdp'=>$mdp);
			
			 $this->load->model('UserModele');
			 $check = $this->UserModele->check_user($datas);

			 if(count($check) > 0){
                $user = $check[0];
                $datas= array(
                    'id' => $user->id,
                    'pseudo' => $user->pseudo,
                    'mdp' => $user->mdp,
                    'connected' => true
                );
                $this->session->set_userdata($datas);
				redirect('indexx/charger_vue_AcceuilUserView');

			}
			else{
				echo '<script>alert("mot de passe ou login incorect");</script>';
                $this->load->view('seConnecterView');
		 
            }
	}

	public function lien_nouvelle_tache()
	{
		$this->load->view('nouvelle_tacheView');
	}

	public function nouvelle_tache()
		/// verifie si les champs sont remplis et si la taille correspond a celle specifiee puis rentre dans la bdd
		{
		$this->form_validation->set_rules('description','description', 'required|min_length[5]',
		array('required' => 'La description de la tache est obligatoire',
			'min_length' => '5 caractères minimum'));

		 
		if($this->form_validation->run())
		{

			$description=$this->input->post('description');
			$id_user = $this->session->id;
			$this->load->model('UserModele');
			$tache = $this->UserModele-> check_user($id_user);
			 
			$datas= array(
				'description'=>$description,
				'id_user'=>$id_user,
				 'etat'=>1,
				 'datecreation'=>date('Y-m-d')

			);
			$this->load->model('insertion_bdd');
			$this->insertion_bdd->insert_into_bdd($datas);
			 
			echo '<script>alert("tache creee avec succes");</script>';
 
			// redirect('indexx/charger_vue_AcceuilUserView');
			// $this->load->view('AcceuilUserview');
			$this->load->view('nouvelle_tacheView');
			 
		}

		else
        {
            $this->load->view('nouvelle_tacheView');
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
	{	//affiche les taches se trouvant dans la bdd sur la view AcceuilUserView
		$id_user = $this->session->id;
		$this->load->model('UserModele');
		$user = $this->UserModele-> check_user($id_user);
		$this->load->model('insertion_bdd');
		$donnee['tache']=$this->insertion_bdd->recuperer_tache($id_user);
		$this->load->view('liste_tacheView', $donnee);
	}

	public function sup_tache()
	

	{   //supprime la tache selectionnee
		// $id_user = $this->session->id;
		// $this->load->model('UserModele');
		// $user = $this->UserModele-> check_user($id_user);
		// $this->load->model('insertion_bdd');
		// $donnee['tache']=$this->insertion_bdd->recuperer_tache($id_user);
		
		$idtache = $this -> uri -> segment(3);
		$this -> load -> model('insertion_bdd');
		$this -> insertion_bdd->sup_tache($idtache);
		
		echo '<script>alert("tache supprimée avec succes");</script>';
		redirect('indexx/select_data');
		// $this->load->view('liste_tacheView', $donnee);
		// $this->load->view('liste_tacheView');
		
	
 
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

		public function deconnexion()
		{
            $this->session->unset_userdata('connected');
            redirect();
        }
}