<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

// Parcours de la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Conversion en minuscules pour simplifier le comptage

    // Vérification si le caractère est une lettre
    if (preg_match('/[a-z]/i', $char)) {
        // Vérification si le caractère est une voyelle
        if (in_array($char, array('a', 'e', 'i', 'o', 'u', 'y'))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage du tableau HTML
echo '<style>
    table {
        border-collapse: collapse;
        width: 300px;
        margin: 20px;
    }
    
    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }
    
    thead {
        background-color: #f2f2f2;
    }
</style>';

echo '<table>';
echo '<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
echo '<tbody>';
echo '<tr><td>' . $dic["voyelles"] . '</td><td>' . $dic["consonnes"] . '</td></tr>';
echo '</tbody>';
echo '</table>';
?>