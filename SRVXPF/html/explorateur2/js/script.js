function go(id){

    //alert(id);
    var id_clk ="#"+id;
    //alert(id_clk);
    var url = $(id_clk).text();
    //alert(url);
    if (url=='') {
      url="\/home\/";
      //alert(url);
    }

//$(document).ready(function() {
  //$("#id_list_fct").change(function() {
  //  setInterval(function(){
    //  var namfctbox = $('#id_list_fct').find(":selected").val();
      $.ajax({
        type: 'post',
        url: 'php/exploserveur.php',
        data: {url:url},
        success: function(response,status){
          //alert(response);
          var a = JSON.parse(response);

          //alert(a[0]);
          //console.log(a[4]);
          $("#div1").empty();
          $("#div2").empty();
          //$("#div3").empty();
          $("#divback").empty();
          var tabDir=a[4];
          for (var vtab in tabDir) {
            //alert(vtab);
            //alert(tabDir[vtab]);
            $link = "<a id=\"a"+vtab+"\" onclick=\"go(this.id)\">"+tabDir[vtab]+"</a>"
              $("#div1").append($link);
              $("#div1").append('<br>');
              //console.log(tabDir[vtab]);
          }


          $("#div2").empty();
          //$("#div3").empty();
          $("#back").empty();

          $("#div2").append("<pre>"+a[1]+"</pre>");
          //$("#div3").append("<pre>"+a[2]+"</pre>");
          $link2 = "<button id=\"back\" onclick=\"go(this.id)\" value=\"BACK\">"+a[0]+"</button>"
            console.log($link2);
            $("#back").append($link2);
          //$("#divback").append('<button value="back">');
          console.log(a[0]);

        }
      });
  //  },1000);
//  });
//  });
}
