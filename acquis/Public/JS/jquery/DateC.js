function DateC(DateC)
{
date = new Date;
annee = date.getFullYear();
moi = date.getMonth();
mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
j = date.getDate();
jour = date.getDay();
jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
resultat = 'Date du Jour : '+jours[jour]+' '+j+' '+mois[moi]+' '+annee;
document.getElementById(DateC).innerHTML = resultat;
setTimeout('DateC("'+DateC+'");','1000');
return true;
}