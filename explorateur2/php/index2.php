<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../scss/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>3.7 infoserveur</title>
   <!-- <style type="text/css">
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
   </style> -->
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
   <script src="../js/script2.js"></script>
  </head>

  <body id="idbody" onload="go()">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12 div00" id="div00"></div>

          <div class="col-12 div0" id="div0"><input placeholder="Recherche..." id="search" type="text" name="search" onblur="go(this.id)" ></div>
          <div class="col-12 div3" id="div3"></div>
          <div class="col-6 div1" id="div1"></div>
          <div class="col-6 div2" id="div2"></div>

          <!--<a id="tp1" value="/home/" onClick="go(this.id)">/home/</a>-->
      </div>
    </div>
  </body>
</html>
