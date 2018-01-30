<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>infoserveur</title>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

    <script type="text/javascript">
        function go(id){

          //alert(id);

          if (id==null) {
            id="\/home\/";
          //url="\/home\/";
            //alert(id);

          }


              $.ajax({
                type: 'post',
                url: 'exploServ.2.0.php',
                data: {url:id},
                //data: {url:url},
                success: function(response,status){
                  //alert(response);
                  var a = JSON.parse(response);

                  //alert(a[0]);
                  //console.log(a[4]);
                  $("#div1").empty();
                  $("#div2").empty();
                  $("#div3").empty();
                  $("#divdate").empty();
                  var tabDir=a[4];
                  var tabShortDir=a[3];
                  for (var vtab in tabDir) {
                    //alert(vtab);
                    //alert(tabDir[vtab]);
                    //$back = "<a href=\""
                    $linkurl=tabDir[vtab];
                    $link = "<a id=\""+$linkurl+"\" onclick=\"go(this.id)\" value=\""+$linkurl+"\"><img class=\"images\" src=\"../img/dossier.png\">"+tabShortDir[vtab]+"</a>"
                    //alert($link);
                      $("#div1").append($link);
                      $("#div1").append('<br>');
                      //console.log(tabDir[vtab]);
                  }


                  $("#div2").empty();
                  $("#back1").empty();
                  //$("#divdate").empty();
                  console.log(a[0]);
                  console.log(a[2]);
                  $("#div2").append("<pre>"+a[1]+"</pre>");

                  $link2 = "<a id=\""+a[0]+"\" onclick=\"go(this.id)\" value=\""+a[0]+"\">BACK .."+a[0]+"</a>"
                  $("#div1").append('<br>');
                  //alert($link2);
                  $("#back1").append($link2);

                  //$("#div3").append("<pre>"+a[2]+"</pre>");
                  //$("#divdate").append(a[3]);
                }
              });
          //  },1000);
        //  });
      //  });
    }
    </script>
  </head>
  <body onload="go()">
<div class="container-fluid">
  <div class="row">

    <div class="col-6 div1 " id="div1"></div>
    <div class="col-6 div2" id="div2"></div>
    <div id="back1" class="back1 col-6"><div>
    <!-- <div class="col-3" id="div3"></div>
    <div class="col-3" id="div4"></div> -->

    <!--<a id="tp1" value="/home/" onClick="go(this.id)">/home/</a>-->

  </div>

</div>
  </body>
</html>
