<?php 
	class MyPdo
	{
	protected $connection;
	public function __construct()
		{
			try			//Si erreurs dans Try -> Catch
				{
					$this -> connection = new PDO('mysql:host=localhost;dbname=si6;charset=utf8', 'root', "");  //Récupère les erreurs
					$this -> connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
			catch (PDOException $e)
				{
					echo 'Échec lors de la connection : '.$e -> getMessage();
				}
		}
	}
?>