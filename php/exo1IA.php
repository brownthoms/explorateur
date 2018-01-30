<?php if ($_POST['mail']==NULL): ?>
EXO1IA
<?php
echo "<script type=\"text/javascript\">window.alert('You must enter your full name.');
window.location.href = 'exo1.php';</script>";
exit;
 ?>

<?php else: ?>
  Votre email <?php echo htmlspecialchars($_POST['mail']);?> a été pris en compte
  <?php
  echo "<script type=\"text/javascript\">window.alert('Vous êtes enregistré à la newsletter');
  window.location.href = 'exo1.php';</script>";
  exit;
   ?>
<?php endif; ?>
