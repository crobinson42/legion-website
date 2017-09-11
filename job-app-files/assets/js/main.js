$(document).ready(function() {

	$('#myWizard').wizard();
	$('#mySelectlist').selectlist();	

	const nextButton = document.querySelector('.btn-next');
	const prevButton = document.querySelector('.btn-prev');	

	// retrieving form input values

	const firstName = $('input.first').val();
	const lastName = $('input.last').val();	
	const email = $('input.email').val();	
	const phone = $('input.phone').val();
	const personality = $('input.personality').val();

	const guardCard = $('input[name=guard]:checked').val();
	const gunPermit = $('input[name=firearm]:checked').val();
	const driver = $('input[name=driver]:checked').val();
	const hsgrad = $('input[name=hsgrad]:checked').val();
	const college = $('input[name=college]:checked').val();
	const fired = $('input[name=fired]:checked').val();
	const sick = $('option[name=sick]:checked').val();
	const fitness = $('input[name=fitness]:checked').val();
	const longShifts = $('input[name=longShifts]:checked').val();
	const overtime = $('input[name=overtime]:checked').val();
	const nights = $('input[name=nights]:checked').val();
	
      const changeButton = () => {

	  	prevButton.classList.remove('first-button');

     }

	nextButton.addEventListener('click', changeButton);
})







	


