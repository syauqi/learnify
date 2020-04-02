"use strict";

// Class definition
var KTWizard1 = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	
	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_wizard_v1', {
			startStep: 1
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		})

		// Change event
		wizard.on('change', function(wizard) {
			setTimeout(function() {
				KTUtil.scrollTop();	
			}, 500);
		});
	}	

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {	
				//= Step 1
				address1: {
					required: true 
				},
				postcode: {
					required: true
				},	   
				city: {
					required: true
				},	 
				state: {
					required: true
				},	 
				country: {
					required: true
				},	 

				//= Step 2
				package: {
					required: true
				},
				weight: {
					required: true
				},	
				width: {
					required: true
				},
				height: {
					required: true
				},	
				length: {
					required: true
				},			   

				//= Step 3
				delivery: {
					required: true
				},
				packaging: {
					required: true
				},	
				preferreddelivery: {
					required: true
				},	

				//= Step 4
				locaddress1: {
					required: true 
				},
				locpostcode: {
					required: true
				},	   
				loccity: {
					required: true
				},	 
				locstate: {
					required: true
				},	 
				loccountry: {
					required: true
				},	
			},
			
			// Display error  
			invalidHandler: function(event, validator) {	 
				KTUtil.scrollTop();

				swal({
					"title": "", 
					"text": "There are some errors in your submission. Please correct them.", 
					"type": "error",
					"confirmButtonClass": "btn btn-secondary"
				});
			},

			// Submit valid form
			submitHandler: function (form) {
				
			}
		});   
	}

	var initSubmit = function() {
		var btn = formEl.find('[data-ktwizard-type="action-submit"]');

		btn.on('click', function(e) {
			e.preventDefault();

			if (validator.form()) {
				// See: src\js\framework\base\app.js
				KTApp.progress(btn);
				//KTApp.block(formEl);

				// See: http://malsup.com/jquery/form/#ajaxSubmit
				formEl.ajaxSubmit({
					success: function() {
						KTApp.unprogress(btn);
						//KTApp.unblock(formEl);

						swal({
							"title": "", 
							"text": "The application has been successfully submitted!", 
							"type": "success",
							"confirmButtonClass": "btn btn-secondary"
						});
					}
				});
			}
		});
	}

	return {
		// public functions
		init: function() {
			wizardEl = KTUtil.get('kt_wizard_v1');
			formEl = $('#kt_form');

			initWizard(); 
			initValidation();
			initSubmit();
		}
	};
}();

jQuery(document).ready(function() {	
	KTWizard1.init();
});