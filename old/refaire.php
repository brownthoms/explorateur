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
        <script type="text/javascript" src="..refaire/js/refaire.js"></script>
        <link rel="stylesheet" type="text/css" href="css/refaire.css" />
  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    <div class="col-12" >


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
