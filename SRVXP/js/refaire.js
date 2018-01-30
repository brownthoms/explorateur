$(document).ready(function() {
  //$("#id_list_fct").change(function() {
    setInterval(function(){
      var namfctbox = $('#id_list_fct').find(":selected").val();

      $.ajax({
        type: 'post',
        url: 'refaire.1.php',
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

});
