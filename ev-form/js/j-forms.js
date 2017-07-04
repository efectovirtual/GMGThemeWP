$(document).ready(function(){



	/***************************************/
	/* Form validation */
	/***************************************/
	$( '#j-forms' ).validate({

		/* @validation states + elements */
		errorClass: 'error-view',
		validClass: 'success-view',
		errorElement: 'span',
		onkeyup: false,
		onclick: false,

		/* @validation rules */
		rules: {
			platform: {
				required: true
			},

			accountbasecurrency: {
				required: true
			},

			title: {
				required: true
			},

			first_name: {
				required: true
			},

			last_name: {
				required: true
			},

			gender: {
				required: true
			},

			email: {
				required: true
			},

			countryphone: {
				required: true
			},

			ccode: {
				required: true
			},

			ptelephone: {
				required: true
			},

			address01: {
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

			zipcode: {
				required: true
			},

			tenancy: {
				required: true
			},

			address3year: {
				required: true
			},

			residentusa: {
				required: true
			},

			date: {
				required: true
			},

			nationality: {
				required: true
			},

			sharedacc: {
				required: true
			},

			politicaloffice: {
				required: true
			},

			accounthn: {
				required: false
			},

			namebank: {
				required: false
			},

			bankaccount: {
				required: false
			},

			sortcodern: {
				required: false
			},

			employment_status: {
				required: true
			},

			currency_provide: {
				required: true
			},

			provide_annual_amount: {
				required: true
			},

			indicate_annual_liquid: {
				required: true
			},

			indicate_annual_available: {
				required: true
			},

			indicate_source_trading: {
				required: true
			},

			experience_10years: {
				required: true
			},

			professional_academic: {
				required: true
			},

			webinars_courses_Forex: {
				required: true
			},

			webinars_financial_instrument: {
				required: true
			},

			level_education: {
				required: true
			},

			demoaccount: {
				required: true
			},

			forex: {
				required: true
			},

			CFDs: {
				required: true
			},

			equities_bonds: {
				required: true
			},

			equity_indices: {
				required: true
			},

			commodity_futures_options: {
				required: true
			},

			spread_betting: {
				required: true
			},

			forexf: {
				required: true
			},

			CFDsf: {
				required: true
			},

			equities_bondsf: {
				required: true
			},

			equity_indicesf: {
				required: true
			},

			commodity_futures_optionsf: {
				required: true
			},

			spread_bettingf: {
				required: true
			},

			forexv: {
				required: true
			},

			CFDsv: {
				required: true
			},

			equities_bondsv: {
				required: true
			},

			equity_indicesv: {
				required: true
			},

			commodity_futures_optionsv: {
				required: true
			},

			spread_bettingv: {
				required: true
			},

			sufficient_information_comp: {
				required: true
			},

			holding_investments: {
				required: true
			},

			understood_information: {
				required: true
			},

			understanding_trading: {
				required: true
			},

			further_payments: {
				required: true
			},

			execute_orders: {
				required: true
			},

			close_trade: {
				required: true
			},

			loss_orders: {
				required: true
			},

			gmg_client_greement: {
				required: true
			},

			gmg_market_greement2: {
				required: true
			},

			market_data_declaration: {
				required: true
			},

			over18years: {
				required: true
			},

			password4: {
				required: true
			},

			password4b: {
				required: true
			},


			signingterms: {
				required: true
			},

			brokergmg: {
				required: true
			},

			level_transactions: {
				required: true
			},

			portfolio_exceed: {
				required: true
			},

			worked_financial: {
				required: true
			}
	
		},
		messages: {

			platform: {
				required: 'Required Field'
			},

			accountbasecurrency: {
				required: 'Required Field'
			},

			title: {
				required: 'Required Field'
			},

			first_name: {
				required: 'Required Field'
			},

			last_name: {
				required: 'Required Field'
			},

			gender: {
				required: 'Required Field'
			},

			email: {
				required: 'Required Field'
			},

			countryphone: {
				required: 'Required Field'
			},

			ccode: {
				required: 'Required Field'
			},

			ptelephone: {
				required: 'Required Field'
			},

			address01: {
				required: 'Required Field'
			},

			city: {
				required: 'Required Field'
			},

			state: {
				required: 'Required Field'
			},

			country: {
				required: 'Required Field'
			},

			zipcode: {
				required: 'Required Field'
			},

			tenancy: {
				required: 'Required Field'
			},

			address3year: {
				required: 'Required Field'
			},

			residentusa: {
				required: 'Required Field'
			},

			date: {
				required: 'Required Field'
			},

			nationality: {
				required: 'Required Field'
			},

			sharedacc: {
				required: 'Required Field'
			},

			politicaloffice: {
				required: 'Required Field'
			},

			accounthn: {
				required: 'Required Field'
			},

			namebank: {
				required: 'Required Field'
			},

			bankaccount: {
				required: 'Required Field'
			},

			sortcodern: {
				required: 'Required Field'
			},

			employment_status: {
				required: 'Required Field'
			},

			currency_provide: {
				required: 'Required Field'
			},

			provide_annual_amount: {
				required: 'Required Field'
			},

			indicate_annual_liquid: {
				required: 'Required Field'
			},

			indicate_annual_available: {
				required: 'Required Field'
			},

			indicate_source_trading: {
				required: 'Required Field'
			},

			experience_10years: {
				required: 'Required Field'
			},

			professional_academic: {
				required: 'Required Field'
			},

			webinars_courses_Forex: {
				required: 'Required Field'
			},

			webinars_financial_instrument: {
				required: 'Required Field'
			},

			level_education: {
				required: 'Required Field'
			},

			demoaccount: {
				required: 'Required Field'
			},

			forex: {
				required: 'Required Field'
			},

			CFDs: {
				required: 'Required Field'
			},

			equities_bonds: {
				required: 'Required Field'
			},

			equity_indices: {
				required: 'Required Field'
			},

			commodity_futures_options: {
				required: 'Required Field'
			},

			spread_betting: {
				required: 'Required Field'
			},

			forexf: {
				required: 'Required Field'
			},

			CFDsf: {
				required: 'Required Field'
			},

			equities_bondsf: {
				required: 'Required Field'
			},

			equity_indicesf: {
				required: 'Required Field'
			},

			commodity_futures_optionsf: {
				required: 'Required Field'
			},

			spread_bettingf: {
				required: 'Required Field'
			},

			forexv: {
				required: 'Required Field'
			},

			CFDsv: {
				required: 'Required Field'
			},

			equities_bondsv: {
				required: 'Required Field'
			},

			equity_indicesv: {
				required: 'Required Field'
			},

			commodity_futures_optionsv: {
				required: 'Required Field'
			},

			spread_bettingv: {
				required: 'Required Field'
			},

			sufficient_information_comp: {
				required: 'Required Field'
			},

			holding_investments: {
				required: 'Required Field'
			},

			understood_information: {
				required: 'Required Field'
			},

			understanding_trading: {
				required: 'Required Field'
			},

			further_payments: {
				required: 'Required Field'
			},

			execute_orders: {
				required: 'Required Field'
			},

			close_trade: {
				required: 'Required Field'
			},

			loss_orders: {
				required: 'Required Field'
			},

			gmg_client_greement: {
				required: 'Required Field'
			},

			gmg_market_greement2: {
				required: 'Required Field'
			},

			market_data_declaration: {
				required: 'Required Field'
			},

			over18years: {
				required: 'Required Field'
			},

			password4: {
				required: 'Required Field'
			},

			password4b: {
				required: 'Required Field'
			},

			signingterms: {
				required: 'Required Field'
			},

			brokergmg: {
				required: 'Required Field'
			},

			level_transactions: {
				required: 'Required Field'
			},

			portfolio_exceed: {
				required: 'Required Field'
			},

			worked_financial: {
				required: 'Required Field'
			}
		},
		
		// Add class 'error-view'
		highlight: function(element, errorClass, validClass) {
			$(element).closest('.input').removeClass(validClass).addClass(errorClass);
			if ( $(element).is(':checkbox') || $(element).is(':radio') ) {
				$(element).closest('.check').removeClass(validClass).addClass(errorClass);
			}
		},
		// Add class 'success-view'
		unhighlight: function(element, errorClass, validClass) {
			$(element).closest('.input').removeClass(errorClass).addClass(validClass);
			if ( $(element).is(':checkbox') || $(element).is(':radio') ) {
				$(element).closest('.check').removeClass(errorClass).addClass(validClass);
			}
		},
		// Error placement
		errorPlacement: function(error, element) {
			if ( $(element).is(':checkbox') || $(element).is(':radio') ) {
				$(element).closest('.check').append(error);
			} else {
				$(element).closest('.unit').append(error);
			}
		},
		// Submit the form
		submitHandler:function() {
			$( '#j-forms' ).ajaxSubmit({

				// Server response placement
				target:'#j-forms #response',
				
				// If error occurs
				error:function(xhr) {
					$('#j-forms #response').html('An error occured: ' + xhr.status + ' - ' + xhr.statusText);
				},

				// Before submiting the form
				beforeSubmit:function(){
					// Add class 'processing' to the submit button
					$('#j-forms button[type="submit"]').attr('disabled', true).addClass('processing');
				},

				// If success occurs
				success:function(){
					// Remove class 'processing'
					$('#j-forms button[type="submit"]').attr('disabled', false).removeClass('processing');

					// If response from the server is a 'success-message'
					if ( $('#j-forms .success-message').length ) {

						// Remove classes 'error-view' and 'success-view'
						$('#j-forms .input').removeClass('success-view error-view');
						$('#j-forms .check').removeClass('success-view error-view');

						// Reset form
						$('#j-forms').resetForm();

						// Prevent submitting the form while success message is shown
						$('#j-forms button[type="submit"]').attr('disabled', true);

						// Prevent clicking on the 'prev' button
						$('#j-forms .multi-prev-btn').attr('disabled', true);

						setTimeout(function(){
							// Delete success message after 5 seconds
							$('#j-forms #response').removeClass('success-message').html('');

							// Make submit button available
							$('#j-forms button[type="submit"]').attr('disabled', false);

							// Make 'prev' button available
							$('#j-forms .multi-prev-btn').attr('disabled', false);

							// Hide submit button and 'prev' button
							$('#j-forms .multi-prev-btn').css('display', 'none');
							$('#j-forms .multi-submit-btn').css('display', 'none');

							// Make first fieldset from multistep form active
							$('#j-forms fieldset').removeClass('active-fieldset');
							$('#j-forms fieldset').eq(0).addClass('active-fieldset');

							// Make first step from multistep form active
							$('#j-forms .step').removeClass('active-step passed-step');
							$('#j-forms .step').eq(0).addClass('active-step');

							// Show 'next' button
							$('#j-forms .multi-next-btn').css('display', 'block');
						}, 5000);
					}
				}
			});
		}
	});
	/***************************************/
	/* end form validation */
	/***************************************/

	/***************************************/
	/* Multistep form */
	/***************************************/
	// if multistep form exists
	if ( $('form.j-multistep').length ) {

		// For each multistep form
		// Execute the function
		$('form.j-multistep').each( function() {

			// Variables
			var
				$id 		= $(this).attr('id'),							// form ID
				$i			= $('#' + $id + ' fieldset').length,			// number of fieldsets
				$step		= $('#' + $id + ' .step').length,				// number of steps
				$next_btn	= $('#' + $id + ' .multi-next-btn'),			// 'next' button
				$prev_btn	= $('#' + $id + ' .multi-prev-btn'),			// 'previous' button
				$submit_btn	= $('#' + $id + ' .multi-submit-btn');			// 'submit' button

			// Add class "active-fieldset" to the first fieldset on the page
			$( '#' + $id + ' fieldset').eq(0).addClass('active-fieldset');

			// If class ".step" exists
			// Add class "active-step"
			if ( $step ) {
				$('#' + $id + ' .step').eq(0).addClass('active-step');
			}

			// If first fieldset has class 'active'
			// Processing the buttons
			if ( $('#' + $id + ' fieldset').eq(0).hasClass('active-fieldset') ) {
				$submit_btn.css('display', 'none');
				$prev_btn.css('display', 'none');
			}

			// Click on the "next" button
			$next_btn.on('click', function() {

				// If current fieldset doesn't have validation errors
				// Switch to the next step
				if ($('#' + $id).valid() == true) {
				
					// Switch the "active" class to the next fieldset
					$('#' + $id + ' fieldset.active-fieldset').removeClass('active-fieldset').next('fieldset').addClass('active-fieldset');

					// If ".step" exists
					// Switch the "active" class to the next step
					if ( $step ) {
						$('#' + $id + ' .step.active-step').removeClass('active-step').addClass('passed-step').next('.step').addClass('active-step');
					}

					// Display "prev" button
					$prev_btn.css('display', 'block');

					// If active fieldset is a last
					// processing the buttons
					if ( $('#' + $id + ' fieldset').eq($i-1).hasClass('active-fieldset') ) {
						$submit_btn.css('display', 'block');
						$next_btn.css('display', 'none');
					}

				// If current fieldset has validation errors
				} else {
					return false;
				}
			});

			// Click on the "prev" button
			$prev_btn.on('click', function() {

				// Switch the "active" class to the previous fieldset
				$('#' + $id + ' fieldset.active-fieldset').removeClass('active-fieldset').prev('fieldset').addClass('active-fieldset');

				// If ".step" exists
				// Switch the "active" class to the previous step
				if ( $step ) {
					$('#' + $id + ' .step.active-step').removeClass('active-step').prev('.step').removeClass('passed-step').addClass('active-step');
				}

				// If active fieldset is a first
				// processing the buttons
				if ( $('#' + $id + ' fieldset').eq(0).hasClass('active-fieldset') ) {
					$prev_btn.css('display', 'none');
				}

				// If active fieldset is a penultimate
				// processing the buttons
				if ( $('#' + $id + ' fieldset').eq($i-2).hasClass('active-fieldset') ) {
					$submit_btn.css('display', 'none');
					$next_btn.css('display', 'block');
				}
			});
		});
		// end "each" statement
	}
	/***************************************/
	/* end multistep form */
	/***************************************/
});