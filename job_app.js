	$(document).ready(function(){

$('.demo').slick();
  arrows: false 
});

	$('.left').click(function(){
	$('.demo').slick('slickPrev');
	})

	$('.right').click(function(){
	$('.demo').slick('slickNext');
	})




	

