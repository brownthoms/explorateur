function go(id){

    var id_clk ="#"+id;

    var url = $(id_clk).text();

    var fichier = "*.*";

    if (url=='') {
      url="\/home\/";
    }

      $.ajax({
        type: 'post',
        url: 'php/exploserveur.php',
        data: {url:url},
        success: function(response,status){

          var a = JSON.parse(response);
          $("#div1").empty();
          $("#div2").empty();
          //$("#div3").empty();
        //  $("#divback").empty();
          var tabDir=a[4];
          for (var vtab in tabDir) {
            //alert(vtab);
            //alert(tabDir[vtab]);
            $link = "<a id=\"a"+vtab+"\" onclick=\"go(this.id)\"><img src =\"img/dossier.png\" style =\"height: 30px; width:30px\">"+tabDir[vtab]+"</a>"
              $("#div1").append($link);
              $("#div1").append('<br>');
              //console.log(tabDir[vtab]);
          }

          $("#div2").empty();
          //$("#div3").empty();
          $("#button").empty();

          $("#div2").append("<pre>"+a[1]+"</pre>");
          //$("#div3").append("<pre>"+a[2]+"</pre>");
          $link2 = "<input value=\"back\" type=\"button\" id=\"back\" onclick=\"go(this.id)\">"+a[0]
            console.log($link2);
            $("#button").append($link2);
          //$("#divback").append('<button value="back">');
            console.log(a[0]);

        }
      });
}
