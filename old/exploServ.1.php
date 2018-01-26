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

$url='/home/';

$urldir=$url.'*/';

$cmddir='ls -d '.$urldir;

$cmdls='ls *.* '.$url;

$test=$cmddir;

shell_exec('cd');

$dirData=shell_exec($cmddir);//free');

$lsData=shell_exec($cmdls);

$hddData=shell_exec('df -h');

$dateData=shell_exec('date');

$tabData=[$dirData,$lsData,$hddData,$dateData,$test];

//echo json_encode($tabData) ;

if ($_POST['fct']==NULL) {
  echo "bug, c'est vide";
}
else {
  switch ($_POST['fct']) {
    case 'files':
        //$tabData[0]=' ';
        //$tabData[2]=' ';
        echo json_encode($tabData) ;
      break;
    case 'ram':
        //$tabData[1]=' ';
        //$tabData[2]=' ';
        echo json_encode($tabData) ;
      break;
    case 'hdd':
        //$tabData[0]=' ';
        //$tabData[1]=' ';
        echo json_encode($tabData) ;
        break;
    default:
      echo "bug";
      break;
  }
}





//echo json_encode($tabData) ;
?>
