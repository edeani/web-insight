$(document).ready(function(){
  $(document).on("click","div.acc_head",function(event){
     event.preventDefault();
     var iddiv = $(this).attr("id");
     $("#"+iddiv).stop().animate({"scrollTop": (posVert(iddiv)) + "px"}, "slow");
  });


 function posVert(iddiv){
     return $(window).scrollTop() - $("#"+iddiv).offset().top;
 }
});
