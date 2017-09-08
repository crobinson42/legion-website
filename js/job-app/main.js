$(document).ready(function() {	

	const nextButton = document.querySelector('.btn-next');
	const prevButton = document.querySelector('.btn-prev');	
	const checkboxYes = document.querySelector('.yes');
	const checkboxNo = document.querySelector('.no');
	
      const changeButton = () => {

	  	prevButton.classList.remove('first-button');	  	
     }

	nextButton.addEventListener('click', changeButton);

	$('#myWizard').checkbox();	
})





	


