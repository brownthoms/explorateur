<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>3.3 infoserveur</title>
    <style type="text/css">
      #div2 {
        margin: 20px 20px 20px 20px;
      }

      body {
        line-height: initial;
      }

      #rep {

        color: grey;
       /* border: 2px solid white;*/
        height: 21px;
        background-image: url("../img/folder.png");
        background-size: 80px;
        background-repeat: no-repeat;
        width: 70%;
        text-align: right;
      }

      #div1 {
        margin-top:20px;
      }

      body {
                background-color: white;
      }
    </style>
    <SCRIPT language=JavaScript>

<!-- http://www.spacegun.co.uk -->

var message = "NoN";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;







</SCRIPT>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

    <script type="text/javascript">
        function go(id){
// préparation des variables pour l'ajax
          if (id==null) {

            // si premier chargement de la page : initialisation
              var urlclt = "\/home\/";
              var urlsav = "\/home\/";
              var urlcur = "\/home\/";

          }
          else
          {
            // sauvegarde de l'url précédente et récupération de l'url voulue
             var id_clk ="#"+id;
             var urlsav = $("#btbk").attr('name');


             if(id=="search"){
              var urlclt=document.getElementById("search").value;
              var urlcur = $("#current").text();
             }
             else{
             var urlclt = $(id_clk).attr('name');
             var urlcur = $(id_clk).attr('name');

              }

          }

// lancement du nettoyage de page AJAX
              $.ajax({
                type: 'post',
                url: 'exploServ3.3.php',  //page de traitement a appeller
                data: {url:urlclt,urlbak:urlcur},
                //data: passage des variables préparées à la page php de traitement
                success: function(response,status){
                  //récupération des données du traitement php
                  var a = JSON.parse(response);
                  //récupération du tableau php en javascript

                  // gestion des erreurs
                  if (a[0]!='') {
                    alert(a[0]);
                  }

                  //vidage des champs div à remplir
                  $("#div00").empty();
                  $("#div1").empty();
                  $("#div2").empty();
                  $("#div3").empty();

                  //affichage url dossier courant
                  $link00="<p id=\"current\">"+urlcur+"</p>";
                  $("#div00").append($link00);

                  //affichage des dossiers
                  var tabDir=a[4];
                  var tabShortDir=a[3];
                  for (var vtab in tabDir) {

                    $linkurl=tabDir[vtab];
                    $link = "<a id=\"direp"+vtab+"\" onclick=\"go(this.id)\" name=\""+$linkurl+"\"><div id=\"rep\" >"+tabShortDir[vtab]+"</div></a>"

                      $("#div1").append($link);
                      $("#div1").append('<br>');

                  }

                  //affichage des fichiers
                  console.log(a[1]);
                  $("#div2").append("<pre>"+a[1]+"</pre>");

                  //affichage du lien de retour
                  $link2 = "<a id=\"btbk\" onclick=\"go(this.id)\" name=\""+a[5]+"\">BACK .."+a[5]+"</a>"
                  $("#div1").append('<br>');
                  $("#div1").append($link2);
                }
              });

    }
    </script>
  </head>
  <body id="idbody" onload="go()">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12" id="div00"></div>

          <div class="col-12" id="div0"><input id="search" type="text" name="search" onblur="go(this.id)" ></div>
          <div class="col-lg-2 col-md-3 col-sm-4" id="div1"></div>
          <div class="col-3" id="div2"></div>
          <div class="col-3" id="div3"></div>
          <div class="col-3" id="div4"></div>
          <!--<a id="tp1" value="/home/" onClick="go(this.id)">/home/</a>-->
      </div>
    </div>
  </body>
</html>
