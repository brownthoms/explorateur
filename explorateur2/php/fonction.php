<?php

   // $url=$_POST['url'];
   // 
   //
   // function verif(){
   //    // vérification en cas de bug
   //    if ($_POST['url']==null) {
   //      $url='/home/';
   //    }
   // }
   //
   // function urlvalide(){
   //    //////*  Test si url valide *//////////
   //    $test_dir_cmd='ls \*.\* '.$url;
   //
   //    if (shell_exec($test_dir_cmd)==null) {
   //
   //      $mess_error = "Folder is empty";
   //      $url=$_POST['urlbak'];
   //
   //    }
   //    else {
   //      $mess_error = '';
   //    }
   // }
   //
   // function listficier(){
   //    /////* listage des fichiers *//////
   //
   //    $cmdls='ls \*.\* '.$url;
   //
   //    $lsData=shell_exec($cmdls);
   // }
   //
   // function prepaurl(){
   //    /* préparation de l'url pour remonter dans l'arborescence */
   //
   //    if ($url=='/') {
   //      //$urlback = dirname($url);
   //      $urlback = '/';
   //    }
   //    else {
   //      $urlback = dirname($url).'/';
   //    }
   // }
   //
   // function lecture(){
   //    // lecture du fichier contenant la liste des dossiers courants
   //
   //    $dir_lght=strlen($dirData);
   //    $tabDir=[];
   //    $tabShortDir=[];
   //    $dir_current='';
   //
   //    for ($i=0; $i < $dir_lght; $i++) {
   //      if (ctype_space($dirData[$i])) {
   //        array_push($tabDir,$dir_current);
   //        //ajout du répertoire trouvé dans le tabkleau des répertoires
   //        $dir_short=basename($dir_current);
   //        $dir_short=ucfirst($dir_short);
   //        $dir_current='';
   //        //vidage du répertoire copié
   //        array_push($tabShortDir,$dir_short);
   //        // ajout de la liste des noms de répertoires
   //      }
   //      else {
   //        $dir_current=$dir_current.$dirData[$i];
   //        //remplissage de l'adresse de chaque répertoire
   //
   //      }
   //
   //    if($url=$_POST['url']){
   //         verif();
   //         urlvalide();
   //         listficier();
   //         prepaurl();
   //         lecture();
   //    }
   //
   // }

 ?>
