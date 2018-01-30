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
        url: '../php/exploserveur.php',
        data: {url:urlclt},
        //data: {url:url},
        success: function(response,status){

          var a = JSON.parse(response);

          if (a[0]!='') {
            alert(a[0]);
          }

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

          $link2 = "<a id=\"btbk\" onclick=\"go(this.id)\" name=\""+a[5]+"\">BACK .."+a[0]+"</a>"
          $("#div1").append('<br>');
          //alert($link2);
          $("#div3").append($link2);
          //alert(a[2]);
          console.log(a[2]);
          //$linksearch="SEARCH :!:::><input id=\"search4\" type=\"text\" name=\"search\" value=\"\" onblur=\"go(this.id)\">";
          //$("#div0").append($linksearch);
          //$("#div3").append("<pre>"+a[2]+"</pre>");
          //$("#divdate").append(a[3]);
        }
      });
}
