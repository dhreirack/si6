<table align="center" id="TabNews">
 <caption>&deg;~ <u><strong>LES NEWS</strong></u> ~&deg;</caption>
	<thead>
	<tr>
		<th align="center" class="TableauNews">&nbsp;&nbsp;&nbsp;&deg;~ID~&deg; &nbsp;&nbsp;&nbsp;</th>
		<th align="center" class="TableauNews">&nbsp;&nbsp;&nbsp;&deg;~Titre~&deg; &nbsp;&nbsp;&nbsp;</th>
		<th align="center" class="TableauNews">&nbsp;&nbsp;&nbsp;&deg;~Description~&deg; &nbsp;&nbsp;&nbsp;</th>
		<th align="center" class="TableauNews">&nbsp;&nbsp;&nbsp;&deg;~Date~&deg; &nbsp;&nbsp;&nbsp;</th>
		<th align="center" class="TableauNews">&nbsp;&nbsp;&nbsp;&deg;~Image~&deg; &nbsp;&nbsp;&nbsp;</th>
		<th align="center" colspan="2" class="TableauNews">&nbsp;&nbsp;&nbsp;&deg;~Actions~&deg; &nbsp;&nbsp;&nbsp;
		</th>
	</tr>
	</thead>
	
	<tbody align="center">

		<?php 
		foreach ($lesNews as $uneNews)
			{
				echo "<tr class=\"TableauNews\"><td class=\"TableauNews\">".$uneNews -> id."</td><td class=\"TableauNews\">".$uneNews -> titre."</td><td class=\"TableauNews\">".$uneNews -> descr."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td><td class=\"TableauNews\">".$uneNews -> dte."</td><td class=\"TableauNews\">".$uneNews -> photo."</td><td id=\"ActionSuppr\"></td><td id=\"ActionEdit\"><a href=\"index.php?action=edit\"></td></tr>";
			}
		?>
	
	</tbody>

</table>