<?php

	$jour_chiffre = date('d');
	$jour = date('D');

	$mois = date('m');
	
	$jour_lettre = "";
	$mois_lettre = "";
	
    switch($mois)
	{
		
		case 1:
		   $mois_lettre = "Janvier";
		   break;
		   
		case 2:
		   $mois_lettre = "Fevrier";
		   break;

        case 3:
		   $mois_lettre = "Mars";
		   break;		   
		case 4:
		   $mois_lettre = "Avril";
		   break;
		 case 5 :
		   $mois_lettre = "Mai";
		   break;
		   
		   case 6:
		   $mois_lettre = "Juin";
		   break;
		   
		case 7:
		   $mois_lettre = "Juillet";
		   break;

        case 8:
		   $mois_lettre = "Aout";
		   break;		   
		case 9:
		   $mois_lettre = "Septembre";
		   break;
		 case 10 :
		   $mois_lettre = "Octobre";
		   break;
		   
		   case 11:
		   $mois_lettre = "Novembre";
		   break;
		 case 12 :
		   $mois_lettre = "Decembre";
		   break;
        		   
}	
	
	  switch($jour)
	{
		
		case 'Mon':
		   $jour_lettre = "Lundi";
		   break;
		   
		case 'Tue':
		   $jour_lettre = "Mardi";
		   break;

        case 'Wed':
		   $jour_lettre = "Mercredi";
		   break;		   
		case 'Thu':
		   $jour_lettre = "Jeudi";
		   break;
		 case 'Fri':
		   $jour_lettre = "Vendredi";
		   break;
		   
		   case 'Sat':
		   $jour_lettre = "Samedi";
		   break;
		   
		case 'Sun':
		   $jour_lettre = "Dimanche";
		   break;

       
}	

	
?>