<?php  ?>
<html>
<head>
<link href="../librairies/bootstrap-4.0.0-dist/css/bootstrap.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">

<script type="text/javascript" src="../librairies/bootstrap-4.0.0-dist/css/bootstrap.js"></script>

</head>
<body>
<form id="idformnewsletter" action="exo3IA.php" method="POST">
<div class="container-fluid">
  <div class="row padtop20 ">
    <div class="offset-4 col-4">
      <?php
      $a = $_POST;

      echo "<pre>".print_r($a,true)."</pre>";



        $temp = $_GET['var'];
        if ($temp!=NULL) {
          echo "Merci de vouloir corriger la valeur de l'espace $temp";
        }
       ?>
    </div>
    <div class="col-4">
    </div>

    <div class="offset-1 col-4 padtop20">
      <div class="floatrgt ">
        <input type="text" name="mail" value="<?php print $_GET['mail']; ?>"></input></p>
      </div>
    </div>
    <div class="col-7 padtop20">
        <p><label >Entrez votre adresse mail pour recevoir la Newsletter</label>
    </div>

    <div class="offset-1 col-4">
      <div class="floatrgt ">
        <input type="text" name="prenom" value="<?php print $_GET['prenom']; ?>"></input></p>
      </div>
    </div>
    <div class="col-7">
        <p><label >Entrez votre prénom</label>
    </div>

    <div class="offset-1 col-4">
      <div class="floatrgt ">
        <input type="text" name="nom" value="<?php print $_GET['nom']; ?>"></input></p>
      </div>
    </div>
    <div class="col-7">
        <p><label >Entrez votre nom</label>
    </div>

    <div class="offset-1 col-4">
      <div class="floatrgt ">
        <input type="text" name="telephone" value="<?php print $_GET['tel']; ?>"></input></p>
      </div>
    </div>
    <div class="col-7">
        <p><label >Entrez votre numéro de téléphone</label>
    </div>

    <div class="offset-1 col-4">
      <div class="floatrgt ">
        <input type="text" name="age" value="<?php print $_GET['age']; ?>"></input></p>
      </div>
    </div>
    <div class="col-7">
        <p><label >Entrez votre âge</label>
    </div>

    <div class="offset-1 col-4">
      <div class="floatrgt ">

      </div>
    </div>
    <div class="col-7">
        <p><input type="submit" value="send"></p>
    </div>


  </div>
</div>
</form>


</body>
</html>
