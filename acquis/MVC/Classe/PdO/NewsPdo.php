<?php 
	class NewsPdo extends MyPdo
	{
	public function __construct()
		{
			try
				{
					parent::__construct();
				}
			catch (PDOException $e)
				{
					echo 'Echec lors de la connection : '.$e -> getMessage();
				}
		}
		
		
		public function create($uneNews)
		{
			try{
				$requete = $this -> connection -> prepare('INSERT INTO news(titre,descr,dte,photo) VALUES(:titre,:descr,:dte,:photo)');
				$requete -> bindValue(':titre',$uneNews -> titre, PDO::PARAM_STR);
				$requete -> bindValue(':descr',$uneNews -> descr, PDO::PARAM_STR);
				$requete -> bindValue(':dte',$uneNews -> dte -> format('Y-m-d'), PDO::PARAM_STR);
				$requete -> bindValue(':photo',$uneNews -> photo, PDO::PARAM_STR);
				$requete -> execute();
			}
			catch (PDOException $e)
			{
				echo 'Échec de Requete : '.$e -> getMessage();
			}
		}
		
/* 		public function delete($id)
		{
			try
			{
				$requete = $this -> connection -> prepare('DELETE FROM news WHERE id='.$id);      
				$requete -> execute();
				$requete -> closeCursor();
			}
			catch (PDOException $e) {     
			echo 'Échec requete : ' . $e->getMessage(); 
		}
		
		public function edit($id)
		{
			$reponse = $this -> connection -> query('SELECT * FROM news where id='.$id);
			$donnees = $reponse -> fetch();
			// On affiche chaque entrée une à une
			
				$uneNews = new News();
				$uneNews -> id = $donnees["id"];
				$uneNews -> titre = $donnees["titre"];
				$uneNews -> descr = $donnees["descr"];
				$uneNews -> photo = $donnees["photo"];
				$uneNews -> dte = $donnees["dte"];
			
				$reponse -> closeCursor();
			
				return $uneNews;
		} */
		
		public function getAll()
		{
			$reponse = $this -> connection -> query('SELECT * FROM news');
			$resultat = array();	//On affiche les entrée une à une
			while ($donnees = $reponse -> fetch())
			{
				$uneNews = new News();
				$uneNews-> id = $donnees["id"];
				$uneNews-> titre = $donnees["titre"];
				$uneNews-> descr = $donnees["descr"];
				$uneNews-> dte = $donnees["dte"];
				$uneNews-> photo = $donnees["photo"];
				$resultat[] = $uneNews;
			}
		$reponse -> closeCursor();
		return $resultat;
		}
		
	}
?>