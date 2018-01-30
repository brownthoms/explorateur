<?php

if ($_POST['url']==null) {
  $url='/home/';
}

  $url=$_POST['url'];


//$url='/home/';

$urldir=$url.'*/';

$cmddir='ls -d '.$urldir;

$cmdls='ls \*.\* '.$url;




$dirData=shell_exec($cmddir);//free');

$lsData=shell_exec($cmdls);



if ($url=='/') {
  //$urlback = dirname($url);
  $urlback = '/';
}
else {
  $urlback = dirname($url);//.'/';
}



// lecture du fichier contenant la liste des dossiers courants

$dir_lght=strlen($dirData);
$tabDir=[];
$tabShortDir=[];
$dir_current='';

for ($i=0; $i < $dir_lght; $i++) {
  if (ctype_space($dirData[$i])) {  //et i>1
    array_push($tabDir,$dir_current);
    $dir_short=basename($dir_current);
    $dir_current='';
    array_push($tabShortDir,$dir_short);
  }
  else {
    $dir_current=$dir_current.$dirData[$i];

  }

}



//remplissage de la table
$tabData=[$urlback,$lsData,$url,$tabShortDir,$tabDir];
//echo json_encode($tabData) ;

echo json_encode($tabData) ;
?>
