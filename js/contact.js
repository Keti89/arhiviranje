$(function() {
	// Validate the contact form
  $('#contactform').validate({
  	// Specify what the errors should look like
  	// when they are dynamically added to the form
  	errorElement: "label",
  	wrapper: "td",
  	errorPlacement: function(error, element) {
  		error.insertBefore( element.parent().parent() );
  		error.wrap("<tr class='error'></tr>");
  		$("<td></td>").insertBefore(error);
  	},
  	
  	// Add requirements to each of the fields
  	rules: {
  		name: {
  			required: true,
  			minlength: 2
  		},
  		email: {
  			required: true,
  			email: true
  		},
  		message: {
  			required: true,
  			minlength: 10
  		}
  	},
  	
  	// Specify what error messages to display
  	// when the user does something horrid
  	messages: {
  		name: {
  			required: "Внесете го Вашето име.",
  			minlength: jQuery.format("Потребни се најмалку {0} карактери.")
  		},
  		email: {
  			required: "Внесете ја Вашата е-адреса.",
  			email: "Внесете валидна е-адреса."
  		},
  		message: {
  			required: "Внесете ја Вашата порака.",
  			minlength: jQuery.format("Потребни се најмалку {0} карактери.")
  		}
  	},
  	
  	// Use Ajax to send everything to processForm.php
  	submitHandler: function(form) {
  		$("#send").attr("value", "Sending...");
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				$(form).slideUp("fast");
  				$("#response").html(responseText).hide().slideDown("fast");
  			}
  		});
  		return false;
  	}
  });
});