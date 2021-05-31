<?php
require('fpdm.php');

//Tableau contenant les paramètres à passer au PDF
$fields = array(
'nom' => 'select nom from personne where idP1 = :idP1',
'prenom' => 'select prenom from personne where idP2 = :idP2',
'nom2' => 'select nom from personne where idP1 = :idP1',
'prenom2' => 'select prenom from',
'dateMariage' => 'dateMariage'
);

//Le paramètre correspond au chemin vers le formulaire PDF
$pdf = new FPDM('pdfpdf.pdf');
$pdf->Load($fields, false); // le second paramètre vaut false si les valeurs sont en ISO-8859-1, vrai si UTF-8
$pdf->Merge();

/*
Le premier paramètre peut prendre 4 valeurs :
D pour que l’utilisateur soit obligé de télécharger le fichier
I pour afficher le fichier dans le navigateur
F pour sauvegarder le document en local
S pour retourner le document en tant que chaine de caractère.
Le deuxième paramètre est le nom du fichier
*/
$pdf->Output("D", "pdfpdf.pdf");
?>