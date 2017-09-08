$(document).ready(function(){

const nextButton = document.querySelector('.btn-next');
const prevButton = document.querySelector('.btn-prev');	
const firstName = document.querySelector('.first');
const firstNameField = document.querySelector('.first-name');
const lastName = document.querySelector('.last');
const lastNameField = document.querySelector('.last-name');	
const emailInput = document.querySelector('.email');	
const emailInputField = document.querySelector('.email-field');
const phoneInput = document.querySelector('.phone');	
const phoneInputField = document.querySelector('.phone-field');
const checkboxYes = document.querySelector('.yes');
const checkboxNo = document.querySelector('.no');		

const validateName = () => {

	if (lastName.value.length < 2) {
		firstNameField.classList.add('alert-danger');
		lastNameField.classList.add('alert-danger');	

		$('#myWizard').wizard('selectedItem', {
		step: 1
		});
	} 
}

const clearFirstNameField = () => {

	firstNameField.classList.remove('alert-danger');
	firstNameField.value = "";			
}

const clearLastNameField = () => {

	lastNameField.classList.remove('alert-danger');
	lastNameField.value = "";
}

const validatePhoneField = () => {

	if (phoneInput.value === "") {
		return true

	} else if (phoneInputField.value.length < 10) {

		phoneInputField.classList.add('alert-danger');
			$('#myWizard').wizard('selectedItem', {
	    	step: 3
	    	});

	} else {
			$('#myWizard').wizard('selectedItem', {
	    	step: 4
	    	});
	}
}

const clearPhoneInputField = () => {

	phoneInput.value = "";
	phoneInputField.classList.remove('alert-danger');
}

const validateEmail = () => {		

	if (emailInput.value === "") {
		return true

	} else if (emailInput.value.length > 2 && emailInput.value.includes('@') && emailInput.value.includes('.')) {        
	  
	 	 	$('#myWizard').wizard('selectedItem', {
	    	step: 3
	    	});

 	} else {

    	emailInput.classList.add('alert-danger');
     	$('#myWizard').wizard('selectedItem', {
	    	step: 2	    	
 	 });   
  } 
} 

const clearEmailInputField = () => {

	emailInputField.classList.remove('alert-danger');
	emailInputField.value = "";
}

nextButton.addEventListener('click', validateName);
nextButton.addEventListener('click', validateEmail);
nextButton.addEventListener('click', validatePhoneField);

prevButton.addEventListener('click', clearFirstNameField);
prevButton.addEventListener('click', clearLastNameField);
prevButton.addEventListener('click', clearEmailInputField);
prevButton.addEventListener('click', clearPhoneInputField);

firstNameField.addEventListener('click', clearFirstNameField);
lastNameField.addEventListener('click', clearLastNameField);
emailInputField.addEventListener('click', clearEmailInputField);
phoneInputField.addEventListener('click', clearPhoneInputField);
	
})

	

	

	
	

