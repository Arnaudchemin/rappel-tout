<?php 

class materiel
{
	
	//attribut
	private $ref_mate;
	private $nom_mate;
	
	//constructeur
	public function __construct  ($ref_mate, $nom_mate)
	{
		$this->ref_mate=$ref_mate;
		$this->nom_mate=$nom_mate;

	}
	
		//accesseurs
		public function getref_mate()
		{
			return $this->ref_mate;
		}
		public function getnom_mate()
		{
			return $this->nom_mate;
		}
		
		public function setref_mate ($ref_mate)
		{
			$this->ref_mate=$ref_mate;
		}
		public function setnom_mate ($nom_mate)
		{
			$this->nom_mate=$nom_mate;
		}
	
		//CRUD
		function create()
		{
			//Create
			include 'connex.php';

			$req = "INSERT INTO materiel(ref_mat, nom_mat) values (:refer_mate, :nom_mate)";
			$STMT = $connex->prepare($req);
			$STMT->bindParam(':refer_mate', $this->ref_mate);
			$STMT->bindParam(':nom_mate', $this->nom_mate);
            try {
                $STMT-> execute();
            }
            catch(PDOException $e){
                die ('Erreur : '.$e->getmessage());
            }
		}

		
}
?>