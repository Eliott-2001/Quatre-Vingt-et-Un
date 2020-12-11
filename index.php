<?php



$titre = 'quatre vingt et un';
echo <<<MON_HTML
<html lang="fr">
<head>

    <title>Quatre Vingt et Un</title>
</head>
<body>
<div>


</div>
</div>

<form method="GET" action="de.php">
    <p>Lancé les dés</p>


   <button type="submit"  value="envoyer"  onclick="do_421()">confirmer</button>

</form>
 

</body>
</html>
MON_HTML;
// algorithme alternatif pour lancé les dés moins performant  et moins optimisé
/*$compteur=0;
do
{
    $goods = [4,2,1];
   $jet1=rand(1,6); // valeur du dé 1
   $jet2=rand(1,6); // valeur du dé 2
   $jet3=rand(1,6); //valeur du dé 3
   $compteur++;
   echo " ".$compteur."---";


;
}while( $jet1 == $jet2 && $jet1 == $jet3 && $jet2 == $jet3 && $jet1 != $goods );
echo 'vous avez tiré un '.$jet1;
   echo 'et un '.$jet2;
   echo 'et un '.$jet3;
echo 'vous avez un quatre vingt et un apres '.$compteur.'coups';*/




?>