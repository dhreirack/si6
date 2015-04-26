°&tilde; <u>Modifier une nouvelle</u> &tilde;°
<form action="index.php?action=edit&id=<?php echo $lesNews->id ; ?>" enctype="multipart/form-data" method="post">
	Titre : <input type="text" name="titre" value="<?php echo $lesNews->titre ; ?>">
	Description : <input type="text" name="description"  value="<?php echo $lesNews->description ; ?>">
	<!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Valider les infos: <input name="userfile" type="file" />
  	<input type="submit">
</form>