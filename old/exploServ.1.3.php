<?php
$tab=[
  "easy" => "wwwwwii",
"whaa" => "2",
];

$tab2=['easy','den','deh'];

/*$php_array = array('easy','den','deh');*/
$php_array = $tab2;
$js_array = json_encode($php_array);


$products = array(
    // product abbreviation, product name, unit price
    array('choc_cake', 'Chocolate Cake', 15),
    array('carrot_cake', 'Carrot Cake', 12),
    array('cheese_cake', 'Cheese Cake', 20),
    array('banana_bread', 'Banana Bread', 14)
);

if ($_POST['url']==null) {
  $url='/';
}

  $url=$_POST['url'];


//$url='/home/';

$urldir=$url.'*/';

$cmddir='ls -d '.$urldir;

$cmdls='ls *.* '.$url;



shell_exec('cd');

$dirData=shell_exec($cmddir);//free');

$lsData=shell_exec($cmdls);

$hddData=shell_exec('df -h');

$dateData=shell_exec('date');




// lecture du fichier contenant la liste des dossiers courants

$dir_lght=strlen($dirData);
$tabDir=[];
$dir_current='';

for ($i=0; $i < $dir_lght; $i++) {
  if (ctype_space($dirData[$i])) {  //et i>1
    array_push($tabDir,$dir_current);
    $dir_current='';
  }
  else {
    $dir_current=$dir_current.$dirData[$i];

  }

}
  

//remplissage de la table
$tabData=[$dirData,$lsData,$hddData,$dateData,$tabDir];
//echo json_encode($tabData) ;

echo json_encode($tabData) ;
?>
