<!DOCTYPE html>
<html>
<head>

</head>
<body>


<p id="panell">Click me away!</p>
<p id="panell2">Click me too!</p>
<button id="btn1" type="button">Submit</button> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
  $("#panell").slideUp(1000).slideDown(1000);
  $("#panell,#panell2").css({color:'red'});
  $('#btn1').on('click', function() {  //mouseover
    $('#panell2').slideToggle(200);
    $('#panell').fadeOut(200);
  });
  
});
</script>

</body>
</html>
