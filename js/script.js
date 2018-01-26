$(document).ready(function(){ // On charge tout le js avant de le lancer
  $('.butt').click(function() { // la fonction demarre au click
    var callAjax = function() {
        $.ajax ({
           url: 'php/check.php',
           data: {action: 'test'},
           type: 'post',
           success: function(output) {
             $(".test").html(output);
           }
         });
       }
     setInterval(callAjax,1000);
  });
});
