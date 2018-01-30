<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>infoserveur</title>
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




          if (id==null) {
              var urlclt = "\/home\/";  

          }
          else
          {
             var id_clk ="#"+id; 
             //alert(id_clk); 
             if(id=="search"){
              //var urlclt=$(id_clk).attr('value');
              var urlclt=document.getElementById("search").value;
              //alert(urlclt);
             }
             else{
             var urlclt = $(id_clk).attr('name');

              }
             
          }


              $.ajax({
                type: 'post',
                url: 'exploServ2.3.php',
                data: {url:urlclt},
                //data: {url:url},
                success: function(response,status){
                  //alert(response);
                  var a = JSON.parse(response);

                  //alert(a[0]);
                  //console.log(a[4]);
                  $("#div00").empty();
                  $("#div1").empty();
                  $("#div2").empty();
                  $("#div3").empty();


                  $link00="<p>"+urlclt+"</p>";
                  $("#div00").append($link00);


                  var tabDir=a[4];
                  var tabShortDir=a[3];
                  for (var vtab in tabDir) {

                    $linkurl=tabDir[vtab];
                    $link = "<a id=\"direp"+vtab+"\" onclick=\"go(this.id)\" name=\""+$linkurl+"\"><div id=\"rep\" >"+tabShortDir[vtab]+"</div></a>"
                    //alert($link);
                      $("#div1").append($link);
                      $("#div1").append('<br>');
                      //console.log(tabDir[vtab]);
                  }

                  $("#div2").append("<pre>"+a[1]+"</pre>");

                  $link2 = "<a id=\"btbk\" onclick=\"go(this.id)\" name=\""+a[0]+"\">BACK .."+a[0]+"</a>"
                  $("#div1").append('<br>');
                  //alert($link2);
                  $("#div1").append($link2);
                  //alert(a[2]);
                  console.log(a[2]);
                  //$linksearch="SEARCH :!:::><input id=\"search4\" type=\"text\" name=\"search\" value=\"\" onblur=\"go(this.id)\">";
                  //$("#div0").append($linksearch);
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
