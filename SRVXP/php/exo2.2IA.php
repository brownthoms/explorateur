<?php
    $nberror=0;
    $arcltviz = [
        "mail" => $_POST['mail'],
        "prenom" => $_POST['prenom'],
        "nom" => $_POST['nom'],
        "telephone" => $_POST['telephone'],
        "age" => $_POST['age'],
    ];

    foreach ($arcltviz as $key => $value) {
        if ($value==NULL) {
          echo "<script type=\"text/javascript\">window.alert('$key est vide, merci de corriger votre erreur');
          window.location.href = 'exo2.2.php?var=$key';</script>";
          exit;
          $nberror++;
        }
    }

    echo "enfin";

 ?>
