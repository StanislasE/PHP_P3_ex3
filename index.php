<?php
    $month = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre') ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
</head>
<body>
    
<p>
<?php
    for ($counter = 0 ; $counter < 11; $counter++) {
        echo $month[$counter] . '<br>' ;
    }
?>
</p>

</body>
</html>