<?php
class MyPdo
{
	protected $connection;
        
	public function __construct(){
		try
		{
			$this->connection=new PDO('mysql:host=localhost;dbname=u814013179_si6;charset=utf8','u814013179_404','dw7CfDvYfsPwu');
			//permet de récup les erreurs
			$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                       
		}
		catch(PDOException $e){
			//affiche le message d'erreur
			echo 'Echec lors de la connetion:'.$e->getMessage();
		}
	}
}