<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
                url: 'exploServ.2.1.php',
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

                  var tabDir=a[4];
                  var tabShortDir=a[3];
                  for (var vtab in tabDir) {

                    $linkurl=tabDir[vtab];
                    $link = "<p><a id=\""+$linkurl+"\" onclick=\"go(this.id)\" value=\""+$linkurl+"\">"+tabShortDir[vtab]+"</a></p>"

                      $("#div1").append($link);


                  }


                  $("#div2").empty();
                  $("#div3").empty();
                  //$("#divdate").empty();
                  console.log(a[0]);
                  console.log(a[2]);
                  $("#div2").append("<pre>"+a[1]+"</pre>");

                  $link2 = "<p><a id=\""+a[0]+"\" onclick=\"go(this.id)\" value=\""+a[0]+"\">BACK .."+a[0]+"</a></p>"
                  //$("#div1").append('<br>');
                  //alert($link2);
                  $("#div1").append($link2);

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

    <div class="col-3" id="div1"></div>
    <div class="col-3" id="div2"></div>
    <div class="col-3" id="div3"></div>
    <div class="col-3" id="div4"></div>



  </div>

</div>
  </body>
</html>
