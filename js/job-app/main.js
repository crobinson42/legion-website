$(document).ready(function() {	

	const nextButton = document.querySelector('.btn-next');
	const prevButton = document.querySelector('.btn-prev');
	
      const changeButton = () => {

	  	prevButton.classList.remove('first-button');
	  	
     }

nextButton.addEventListener('click', changeButton);    
});


