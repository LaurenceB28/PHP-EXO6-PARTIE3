<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6phpP3</title>
</head>
<body>
<h1>Les Hauts de France</h1>
    <p>
        <?php
    // On crée notre array $Departemants
    $Departements = array (
        'Aisne' => '02',
        'Nord' => '59',
        'Oise' => '60',
        'Pas de Calais' => '62',
        'Somme' => '80');
        foreach($Departements as $cle => $element)
{
    echo 'le departement ' . $cle . ' à le numéro ' . $element . '<br />';
}
    ?>

    
</body>
</html>