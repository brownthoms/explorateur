
<?php
    $rootdir = "/home";
    $imagedir = "./img";

    if ( ! is_dir($rootdir) )
    {
        echo "Attention $rootdir, n'est pas disponible.";
        die();
    }

    $currentdir = $_GET['path'];

    // on tronque le debut si c'est un /
    if ( substr($currentdir,0,1) == "/" )
    {
        $currentdir = substr($currentdir,1,strlen($currentdir) - 1);
    }

    // si la fin de $currentdir = .. alors on retourne a la racine de ce dossier
    if ( substr($currentdir, strlen($currentdir) - 2, 2) == ".." )
    {
        // strip last /..
        $currentdir = substr($currentdir, 0, strlen($currentdir) - 3);

        // strip last /dirname
        $currentdir = substr($currentdir, 0, strrpos($currentdir,"/"));
    }

    // si la fin de $currentdir = /. alors on retourne a la racine de ce dossier
    if ( substr($currentdir, strlen($currentdir) - 2, 2) == "/." )
    {
        $currentdir = substr($currentdir, 0,strlen($currentdir) - 2);
    }

    // evite tout probleme de securite MAISempeche les nom de rep avec .. dedans
    $currentdir = str_replace("..", "", $currentdir);

    // on traite les actions spÃ©ciales
    $action = $_GET['action'];
    switch($action)
    {
        case "mkdir":
            if ( isset($_GET['arg'] ) )
            {
                // evite tout probleme de securite MAIS empeche les nom de rep avec .. dedans
                $mkdir = str_replace("..", "", $_GET['arg']);
                umask (0);
                mkdir($rootdir . "/" . $currentdir . "/" . $mkdir);
            }
            else
            {
                $affiche_creer_formulaire = true;

            }
            break;

        case "rm";
            if ( isset($_GET['confirmation'] ) )
            {
                // evite tout probleme de securite MAIS empeche les nom de rep avec .. dedans
                $rm = str_replace("..", "", $_GET['path']);

                if ( isset($_GET['file']) )
                    $rm = $rm . "/" . str_replace("..","", $_GET['file']) ;

                system("rm -r '". $rootdir . "/" . $rm . "'") ;
            }
            else
            {
                if( ! isset($_GET['infirmation']))
                    $affiche_supprimer_formulaire=true;

            }
            // si l'on ne supprimait pas un fichier (donc un rep, on doit retourner a la racine quelque soit la reponse
            if ( ( isset($_GET['confirmation']) || isset($_GET['infirmation']) ) && ! isset($_GET['file']) )
                // strip last /dirname pour retourner au parent du rep en cours
                $currentdir = substr($currentdir, 0, strrpos($currentdir,"/"));
            break;

        case "deconnection":

            break;

        case "upload":
            if ( ! isset($_FILES['uploadFile']) )
            $affiche_upload_formulaire = true;
            break;

    }

    // l'upload se fait en post (l'action)
    if (isset($_POST['action']) && $_POST['action'] == "upload")
    {
        if ( isset($_FILES['uploadFile']) )
        {
            $file_name = $_FILES['uploadFile']['name'];

            // strip file_name of slashes
            $file_name = stripslashes($file_name);
            if ($_POST['date'])
            {
                $file_name = date("Y-m-d-H\hi-") . $file_name;
            }

            $uploaddir = $rootdir . "/" .  str_replace("..","",urldecode($_POST['path']));

            $file_name = $uploaddir . "/" . str_replace("'","",$file_name);
            $copy = copy($_FILES['uploadFile']['tmp_name'],$file_name);
            // check if successfully copied
            if( ! $copy)
            {
                 echo basename($file_name) . " | <b>Impossible d'uploader</b>!<br>";
            }
        }
    }
?>

<html>
<head>
<title>
    Explorateur de fichier - /<?php echo $currentdir; ?>
</title>
</head>
<body>

<BIG><BIG>Explorateur - /<?php echo $currentdir; ?></BIG></BIG>

<table border=1 width=100%>



<?php

if ( $affiche_creer_formulaire )
{
    // affichage du formulaire pour creer un repertoire
    ?>
    <hr>
    <form method="get">
    <input type="hidden" name="path" value="<? echo $currentdir ?>" />
    <input type="hidden" name="action" value="mkdir" />
    Nom du repertoire : <input type="text" name="arg" value=""/>
    <input type="submit" value="Creer" />
    </form>
    <?php
}

if ( $affiche_supprimer_formulaire )
{
    // affichage du formulaire pour supprimer un repertoire
    ?>
    <hr>
    <form method="get">
    <input type="hidden" name="path" value="<? echo $currentdir ?>" />
    <?
    if ( isset($_GET['file']) )
        echo "<input type=\"hidden\" name=\"file\" value=\"" . $_GET['file'] . "\" />";
    ?>
    <input type="hidden" name="action" value="rm" />
    Supprimer <? echo $currentdir . "/"; if (isset($_GET['file'])) echo $_GET['file']; ?> ?
    <input type="submit" name="confirmation" value="Oui" />
    <input type="submit" name="infirmation" value="Non" />
    </form>
    <?php
}

if ( $affiche_upload_formulaire )
{
    ?>
    <hr>
    <form enctype="multipart/form-data" method="post">
    Fichier : <input name="uploadFile" type="file" id="uploadFile" />
    <input type="hidden" name="action" value="upload" />
    <input type="hidden" name="path" value="<? echo urlencode($currentdir);?>">
    <input type="submit" name="submit" value="Uploader" />
      <input type="checkbox" name="date" CHECKED/>Dater le fichier
    </form>
    <?php
}

?>

</td></tr>
<tr>
<td valign=top width=20%>
    <!-- Colonne pour les repertoires -->

    <table border=0 width=100% height=100%>
    <tr><td colspan=3>
        <table border=1 width=100%>
        <tr>
        <td width=100%><b>Repertoires</b></td>
        </tr>
        </table>
    </td></tr>
    <?php
        $directory = opendir( $rootdir . "/" . $currentdir );
        while( $dir = readdir($directory) )
        {
            if (is_dir( $rootdir . "/" . $currentdir . "/" . $dir) && $dir != "." )
            {
                // on affiche pas le ..  quand on est a la racine
                if( $currentdir == "" && $dir != ".." || $currentdir != "")
                {
                    echo "<tr><td width=30 height=30>";
                    echo "<img width=30 height=28 src=\"" . $imagedir . "/dossier.png\">";
                    echo "</td><td width=80%>";
                    echo "<a href=\"" . $_self . "?path=" . urlencode($currentdir) . "/" . urlencode($dir) . "\">" . $dir . "</a>";
                    echo "</td><td align=right> ";
<<<<<<< HEAD

=======
                    if ( $dir != ".." )
                        echo "<a href=\"" . $_self . "?action=rm&path=" . urlencode($currentdir) . "/" . urlencode($dir) . "\">X</a>";
                    echo "</td></tr>\n";
>>>>>>> 10d9588d5402004144407d59499564e121c09ea7
                }
            }
        }
        closedir($directory);
    ?>
    </table>
</td>
<td valign=top width=80%>
    <!-- Colonne pour les fichiers -->

    <table border=0 width=100% height=100%>
    <tr><td colspan=3>
        <table border=1 width=100%>
        <tr>
        <td width=75%><b>Noms</b></td>
<<<<<<< HEAD

=======
        <td width=25% align=right><b>Taille</b></td>
>>>>>>> 10d9588d5402004144407d59499564e121c09ea7
        </tr>
        </table>
    </td></tr>
    <?php

        $directory = opendir( $rootdir . "/" . $currentdir );
        $foundone = false;
        while( $file = readdir($directory) )
        {
            if (is_file($rootdir . "/" . $currentdir . "/" . $file) )
            {
                $foundone = true;
                echo "<tr><td width=30 height=35>";

                // selon l'extension du fichier
                $ext = strtolower(substr($file,strrpos($file,".") + 1,strlen($file) - strrpos($file,".")));
                switch($ext)
                {
                    case "gif":
                    case "jpg":
                    case "png":
                        echo "<img width=30 height=28 src=\"miniature.php?gd=2&maxw=30&src=" . $rootdir . "/" . urlencode($currentdir) . "/" . urlencode($file) . "\"/>";
                        break;
                    default:
                        if ( is_file( $imagedir . "/" . $ext . ".gif" ) )
                            echo "<img width=30 height=28 src=\"miniature.php?gd=2&maxw=30&src=" . $imagedir . "/" . $ext . ".gif" . "\"/>";
                        else
                            echo strtoupper($ext);
                        break;
                }
                echo "</td><td>";
                echo "<a href=\"" . $rootdir . "/" . $currentdir . "/" . $file . "\">" . $file . "</a>";
                echo "</td><td align=right width=15%>";
<<<<<<< HEAD


=======
                echo filesize($rootdir . "/" . $currentdir . "/" . $file );
                echo "  <a href=\"" . $_self . "?action=rm&path=" . urlencode($currentdir) . "&file=" . urlencode($file) . "\">X</a>";
>>>>>>> 10d9588d5402004144407d59499564e121c09ea7
                echo "</td></tr>\n";
            }
        }
        closedir($directory);
        if ( ! $foundone)
        {
            echo "<tr><td colspan=3 align=center><b>Aucun fichier !</b></td></tr>";
        }
    ?>

    </table>

</td>
</tr>
</table>
</body>
</html>
