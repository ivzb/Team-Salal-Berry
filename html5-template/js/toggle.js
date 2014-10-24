$(document).ready(function(){

$(".toggle").click(function(){
    $(this).parent().find('p').toggle();
  });
});