<?php
    $nberror=0;
    $arcltviz = [
        "mail" => $_POST['mail'],
        "prenom" => $_POST['prenom'],
        "nom" => $_POST['nom'],
        "telephone" => $_POST['telephone'],
        "age" => $_POST['age'],
    ];

    $mail=$_POST['mail'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $tel=$_POST['telephone'];
    $age=$_POST['age'];

    $a = $_POST;

    echo "<pre>".print_r($a,true)."</pre>";

    foreach ($arcltviz as $key => $value) {
        if ($value==NULL) {
          echo "<script type=\"text/javascript\">window.alert('$key est vide, merci de corriger votre erreur');
          window.location.href = 'exo3.php?var=$key&mail=$mail&prenom=$prenom&nom=$nom&tel=$tel&age=$age';</script>";
          exit;
          $nberror++;
        }
    }

    echo "enfin";

 ?>
