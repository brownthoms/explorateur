
<?php
if ($_POST['url']==null) {
  $url='/';
}

  $url=$_POST['url'];


//$url='/home/';

$urldir=$url.'*/';

$cmddir='ls -d '.$urldir;

$cmdls='ls \*.\* '.$url;




$dirData=shell_exec($cmddir);//free');

$lsData=shell_exec($cmdls);


if ($url=='/') {
  //$urlback = dirname($url); si origine pas /
  $urlback = '/';
}
else {
  $urlback = dirname($url);//.'/';
  // ajouter .'/' pour eviter le pb sur home
}


// lecture du fichier contenant la liste des dossiers courants

$dir_lght=strlen($dirData);
$tabDir=[];
$tabShortDir=[];
$dir_current='';

for ($i=0; $i < $dir_lght; $i++) {
  if (ctype_space($dirData[$i])) {  //et i>1
    array_push($tabDir,$dir_current);
    //ajout du répertoire trouvé dans le tabkleau des répertoires
    $dir_short=basename($dir_current);
    $dir_current='';
    //vidage du répertoire copié
    array_push($tabShortDir,$dir_short);
    // ajout de la liste des noms de répertoires
  }
  else {
    $dir_current=$dir_current.$dirData[$i];
    //remplissage de l'adresse de chaque répertoire

  }

}


//remplissage de la table
$tabData=[$urlback,$lsData,$url,$tabShortDir,$tabDir];
//echo json_encode($tabData) ;

echo json_encode($tabData) ;
//passage de la table en retour ajax à la page client
?>
