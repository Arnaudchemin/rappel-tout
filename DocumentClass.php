<?php 

class document
{
	
	//attribut
	private $ref_doc;
	private $date_fin_valid;
    private $date_doc;
    private $ref_mat;
	
	//constructeur
	public function __construct  ($ref_doc, $date_fin_valid,$date_doc,$ref_mat)
	{
		$this->ref_doc=$ref_doc;
		$this->date_fin_valid=$date_fin_valid;
        $this->date_doc=$date_doc;
        $this->ref_mat=$ref_mat;
	}
	
		//accesseurs
		public function getref_doc()
		{
			return $this->ref_doc;
		}
		public function getdate_fin_valid()
		{
			return $this->date_fin_valid;
		}
        public function getdate_doc()
		{
			return $this->date_doc;
		}
        public function getref_mat()
		{
			return $this->ref_mat;
		}
		
		public function setref_doc ($ref_doc)
		{
			$this->ref_doc=$ref_doc;
		}
		public function setdate_fin_valid ($date_fin_valid)
		{
			$this->date_fin_valid=$date_fin_valid;
		}
        public function setdate_doc ($date_doc)
		{
			$this->date_doc=$date_doc;
		}
        public function setref_mat ($ref_mat)
		{
			$this->ref_mat=$ref_mat;
		}
	
		//CRUD
		function create()
		{
			//Create
			include 'connex.php';

			$req = "INSERT INTO document(ref_doc, date_fin_valid, date_doc, ref_mat) values (:refer_doc, :date_fin_valid, :date_doc, :ref_mat)";
			$STMT = $connex->prepare($req);
			$STMT->bindParam(':refer_doc', $this->ref_doc);
			$STMT->bindParam(':date_fin_valid', $this->date_fin_valid);
			$STMT->bindParam(':date_doc', $this->date_doc);
			$STMT->bindParam(':ref_mat', $this->ref_mat);
            try {
                $STMT-> execute();
            }
            catch(PDOException $e){
                die ('Erreur : '.$e->getmessage());
            }
		}

		function retrieve()
		{
			include 'connex.php';
			$req="select * from document";
			$stmt=$connex->prepare($req);
			$stmt->bindParam(':ref_doc',$this->ref_doc);
			$stmt->bindParam(':date_fin_valid',$this->date_fin_valid);
			$stmt->bindParam(':date_doc',$this->date_doc);
			$stmt->bindParam(':ref_mat',$this->ref_mat);
			$stmt->fetch(PDO::FETCH_ASSOC);
			try {
                $stmt-> execute();
            }
            catch(PDOException $e){
                die ('Erreur : '.$e->getmessage());
            }

		}

		function retrieve_invalide()
		{
			include 'connex.php';
			$req="select reference_document,date_document,nom_materiel From materiel m Join document d ON m.reference=d.reference where date_maintenance = NOW() AND DATE_FORMAT(date_maintenance,'%d/%m/%Y') ORDER BY nom_materiel";
			$stmt=$connex->prepare($req);
			
			$stmt=$connex->prepare($req);
			$stmt->execute();
		}







}
?>