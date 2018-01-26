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
        $(document).ready(function() {
          //$("#id_list_fct").change(function() {
            setInterval(function(){
              var namfctbox = $('#id_list_fct').find(":selected").val();

              $.ajax({
                type: 'post',
                url: 'exploServ.1.php',
                data: { fct : namfctbox },
                success: function(response,status){
                  //alert(response);
                  var a = JSON.parse(response);

                  //alert(a[0]);
                  //console.log(a[4]);
                  $("#div1").empty();
                  var tabDir=a[4];
                  for (var vtab in tabDir) {
                    //alert(vtab);
                      $("#div1").append(tabDir[vtab]);
                      $("#div1").append('<br>');
                      console.log(tabDir[vtab]);
                  }


                  $("#div2").empty();
                  $("#div3").empty();
                  $("#divdate").empty();

                  $("#div2").append("<pre>"+a[1]+"</pre>");
                  $("#div3").append("<pre>"+a[2]+"</pre>");
                  $("#divdate").append(a[3]);
                }
              });
            },1000);
        //  });
        });
    </script>
  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    <div class="col-12" >
<!--      <div id="idfct">proc</div>-->

        <p>

            <label for="list_fct">Infos?</label><br />

            <select name="list_fct" id="id_list_fct">

                <option value="files">Files</option>

                <option value="ram">RAM</option>

                <option value="hdd">HDD</option>

            </select>

        </p>



    </div>
    <div class="col-12" id="divdate"></div>
    <div class="col-3" id="div1"></div>
    <div class="col-3" id="div2" style="border: 2px green"></div>
    <div class="col-3" id="div3"></div>
    <div class="col-3" id="div4"></div>

  </div>

</div>
  </body>
</html>
