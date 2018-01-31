function rename(id){
  var id_renam ="#"+id;
  var urlfil = $(id_renam).attr('name');
  var newurlfile = 'MGT HACK';
  alert(urlfil);
  $.ajax({
    type: 'post',
    url: 'rename1.0.php',  //page de traitement a appeller
    data: {oriname:urlfil,newname:newurlfile},
    //data: passage des variables préparées à la page php de traitement
    success: function(response,status){
       alert(response);
    }

});

}

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
        url: 'exploserveur.php',  //page de traitement a appeller
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
          $link00="<p id=\"current\"><span style=\" font-weight: bold\">CHEMIN : </span> "+urlcur+"</p>";
          $("#div00").append($link00);

          //affichage des dossiers
          var tabDir=a[4];
          var tabShortDir=a[3];
          for (var vtab in tabDir) {

            $linkurl=tabDir[vtab];
            $link = "<a class=\"linkdossier\" id=\"direp"+vtab+"\" onclick=\"go(this.id)\" name=\""+$linkurl+"\"><img class=\"images\" src=\"../img/dossier.png\">"+tabShortDir[vtab]+"</a>"

             $("#div1").append($link);
             $("#div1").append('<br>');

          }

          //affichage des fichiers
          //console.log(a[1]);
          console.log(a[6]);
          console.log(a[7]);
          //$("#div2").append("<pre>"+a[1]+"</pre>");
          var tabFil=a[7];
          var tabShortFil=a[6];
          for (var vtabf in tabFil) {

            $linkurlfil=tabFil[vtabf];
            $linkfil = "<a id=\"fil"+vtabf+"\" ondblclick=\"rename(this.id)\" name=\""+$linkurlfil+"\">"+tabShortFil[vtabf]+"</a>"

             $("#div2").append($linkfil);
             $("#div2").append('<br>');

          }

          //affichage du lien de retour
          $link2 = "<input id=\"btbk\" onclick=\"go(this.id)\" name=\""+a[5]+"\" type=\"button\" value=\"RETOUR\" class=\"butback\">"
          $("#div1").append('<br>');
          $("#div3").append($link2);
        }
      });

}
