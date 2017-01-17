
$(document).ready(function(){
   $(function(){
   	$(window).scroll(function(){
   		if($(this).scrollTop() != 0){
   		$('#top').fadeIn();
   	}
   	else{
   		$('#top').fadeOut();
   	}
   	});
   	$('#top').click(function(){
      $('html,body').animate({
      	scrollTop:0},500);
      })
   	});
   });
