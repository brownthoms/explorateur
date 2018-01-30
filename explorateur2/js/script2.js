function go(id){

  if (id==null) {
    id="\/home\/";


  }


      $.ajax({
        type: 'post',
        url: 'old/exploServ.2.1.php',
        data: {url:id},
        //data: {url:url},
        success: function(response,status){
          var a = JSON.parse(response);
          $("#div1").empty();
          $("#div2").empty();
          //$("#div3").empty();

          var tabDir=a[4];
          var tabShortDir=a[3];
          for (var vtab in tabDir) {

            $linkurl=tabDir[vtab];
            $link = "<p><a id=\""+$linkurl+"\" onclick=\"go(this.id)\" value=\""+$linkurl+"\">"+tabShortDir[vtab]+"</a></p>"

              $("#div1").append($link);


          }


          $("#div2").empty();
          $("#div3").empty();
          console.log(a[0]);
          console.log(a[2]);
          $("#div2").append("<pre>"+a[1]+"</pre>");

          $link2 = "<p><a id=\""+a[0]+"\" onclick=\"go(this.id)\" value=\""+a[0]+"\">BACK .."+a[0]+"</a></p>"

          $("#div1").append($link2);
        }
      });
}
