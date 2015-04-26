<?php
	class Newsdte
	{
			public $id;
			public $titre;
			public $descr;
			public $photo;
			public $dte;
				
			public function afficherdte()
			{
				return "<i>( ID de la News : ".$this -> id." )</i> <br /><br /> <u>Vous avez saisi :</u> <br /><br /><strong>".$this -> titre."</strong> 
				<i>;en titre de news</i> <br /><br /> <strong>".$this -> descr."</strong> <i>;en description</i> <br /><br /> <strong>".$this -> photo."</strong> <i>;en liens d'image</i> <br /><br /><strong> La News a &eacute;t&eacute; cr&eacute;e en date du : <u>".
				$this -> dte."</u></strong><br /> <br /><strong>".$this -> photo."</strong> <i>;en fichier joinds</i> <br /> <br />";
				
			}
	}
?>