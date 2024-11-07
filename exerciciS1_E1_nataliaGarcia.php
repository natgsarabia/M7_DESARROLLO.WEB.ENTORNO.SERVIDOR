<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?<php>

//EXERCICI 1

//declarem e inicialitza les variables
$nom = "Maria";
$edat = 28;
$ciutat = "Barcelona";
$actiu = true;

//escribim per navegador l'informacio  de les variables
echo $nom;
echo $edat;
e ho $ciutat;

//escribim per navegador  el tipus y valor de la variable
var_dump($nom);
var_dump($edat);
var_dump($ciutat);
var_dump($actiu);

function showUser() {
global $nom;
global $edat;
global $ciutat;

echo "El nom de l'usuari es $nom";
echo "Te $edat anys i és de $ciutat";
}

showUser();


//EXERCICI 2

function comptadorVisites() {
static $comptador =0;
$comptador++;
echo "El nombre  actual  de visites es $comptador";
}

comptadorVisites();
comptadorVisites();
comptadorVisites();
comptadorVisites();






</php>
</body>
</html>
