function DateCStore(DateCStore)
{
date = new Date;
annee = date.getFullYear();
moi = date.getMonth();
mois = new Array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
j = date.getDate();
resultat = j+'/'+mois[moi]+'/'+annee;
document.getElementById(DateCStore).innerHTML = resultat;
setTimeout('DateCStore("'+DateCStore+'");','1000');
return true;
}