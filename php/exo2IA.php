<?php
    $nberror=0;
    $arcltviz = [
        "mail" => $_POST['mail'],
        "prenom" => $_POST['prenom'],
        "nom" => $_POST['nom'],
        "numtel" => $_POST['numtel'],
        "age" => $_POST['age'],
    ];

    foreach ($arcltviz as $key => $value) {
        if ($value==NULL) {
          echo "<script type=\"text/javascript\">window.alert('$key est vide, merci de corriger votre erreur');
          window.location.href = 'exo2.php';</script>";
          exit;
          $nberror++;
        }
    }

    echo "enfin";

 ?>
