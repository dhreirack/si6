<?php
class PressePdo extends MyPdo
{
 	public function __construct(){
		try
		{
			parent::__construct();
		}
		catch (PDOException $e) {
		    echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
 	} 

	public function getAll(){
		$reponse = $this->connection->query('SELECT * FROM presse');
		$resultat = array();
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
			$unArticle=new Presse();
			$unArticle->idarticle=$donnees["idarticle"];
			$unArticle->nomarticle=$donnees["nomarticle"];
			$unArticle->descriptionarticle=$donnees["descriptionarticle"];
		  	$unArticle->dtearticle=$donnees["dtearticle"];
		  	$resultat[]=$unArticle;
		}
		$reponse->closeCursor(); 
		return $resultat;
 	}

 	public function create($unArticle){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO presse(nomarticle, descriptionarticle, dtearticle) VALUES(:nomarticle, :descriptionarticle, :dtearticle)');
			$requete->bindValue(':nomarticle', $unArticle->titre, PDO::PARAM_STR);
			$requete->bindValue(':descriptionarticle', $unArticle->description, PDO::PARAM_STR);
			$requete->bindValue(':dtearticle', $unArticle->dte->format('Y-m-d'), PDO::PARAM_STR);
			$requete->execute();
			/* ou mais moins pratique
			$req= "INSERT INTO news(titre, description, dte) VALUES('".$uneNews->titre."','".$uneNews->description."','".$uneNews->dte->format('Y-m-d')."')";
			$this->connection->exec($req);
			*/
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
 	 	public function delete($id){
 	 		
		 	 		$requete =$this->connection->query('DELETE FROM presse WHERE id = ' .$id);
		 	 		$requete->execute();
	}

} 