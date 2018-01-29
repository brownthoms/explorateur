$(document).ready(function(){ // On charge tout le js avant de le lancer
  $('.test').click(function(e){
    var DATA = "btn-click";
      $.ajax ({
        type: 'post',
        url: 'check.php',
        data: {action: 'test'},
         success: function(output) {
           $(".test").html(output);
         }
      });
    });
});
