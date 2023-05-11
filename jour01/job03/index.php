<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bool = true;
    $int = 17;
    $str = "LaPlateforme";
    $virgule = 17.10;

    $vars = array(
        array("type" => "Boolean", "nom" => "bool", "valeur" => $bool),
        array("type" => "Entier", "nom" => "int", "valeur" => $int),
        array("type" => "Chaine de caractères", "nom" => "str", "valeur" => $str),
        array("type" => "Nombre a virgules", "nom" => "virgule", "valeur" => $virgule),
    );
    
    
    echo "<table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($vars as $var) {
        echo "<tr>
                <td>{$var['type']}</td>
                <td>{$var['nom']}</td>
                <td>{$var['valeur']}</td>
            </tr>";
    }
    echo "</tbody></table>";
    


    ?>
    
</body>
</html>