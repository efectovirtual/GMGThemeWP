
jQuery(function($){

		//============= INTERNATIONAL CODE ===================

		var internationalCode = {
					
			insert: function() {
				var internationalCode = $(this).find(':selected').attr('data-code');
				$('#ccode').val(internationalCode);
				},	
					
			concatenate: function() {
				var intCode = $('#ccode').val();
				var phoneNumber = $('#ptelephone').val();	
				var concatenatedPhoneNumber = (intCode + phoneNumber);
				$('input[name="demo.phone"]').val(concatenatedPhoneNumber);	
				}						  
		};	
			
		//==================== ACTIONS =======================

		$(document).ready(function () {

			// This inserts the international country code from the data-code attribute in the #internation-code input
			
			$( "#countryphone" ).change(internationalCode.insert); 	

			// These update the demo.phone hidden field on blur, change, and keyup for all 3 inputs that are involved
			
			$( "#countryphone" ).on("blur change keyup",internationalCode.concatenate);
			$( "#ptelephone" ).on("blur change keyup",internationalCode.concatenate);
			$( "#ccode" ).on("blur change keyup",internationalCode.concatenate);
			
		}); //closing tag for document.ready	


		// Phone masking

				// Phone masking
				$("#stelephone").mask('999-9999', {placeholder:'x'});


				// Phone masking
				$("#phone").mask('(999) 999-9999', {placeholder:'x'});

				// Mobile
				$("#mobilephone").mask('(999) 999-9999', {placeholder:'x'});

					// Date
				$("#date").mask('99/99/9999', {placeholder:'dd/mm/yyyy'});



	$(document).ready(function() {


		$('#ptelephone').keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;});

		
		$('input[name="address3year"]').on('change', function() {
			if ( this.value.toLowerCase() == 'no' ) {	
				jQuery('#address2').css("display","block")
			} else {
				jQuery('#address2').css("display","none")
			};
		});

		$('input[name="residentusa"]').on('change', function() {
			if ( this.value.toLowerCase() == 'yes' ) {	
				jQuery('#connectionusa').css("display","block")
			} else {
				jQuery('#connectionusa').css("display","none")
			};
		});

		$('select[name="employment_status"]').on('change', function() {
			if ( this.value.toLowerCase() == 'employed' ||  this.value.toLowerCase() == 'self_employed') {	
				jQuery('#employmentij').css("display","block")
			} else {
				jQuery('#employmentij').css("display","none")
			};
		});

		$('input[name="metatrader4c"]').on('change', function() {
			if ( this.value.toLowerCase() == 'no' ) {	
				jQuery('#metatrader4').css("display","block")
			} else {
				jQuery('#metatrader4').css("display","none")
			};
		});

		$('select[name="indicate_source_trading"]').on('change', function() {
			if ( this.value.toLowerCase() == 'other' ) {	
				jQuery('#otherpleasespe').css("display","block")
			} else {
				jQuery('#otherpleasespe').css("display","none")
			};
		});

		$('input[name="nationality"]').on('change', function() {
			if ( this.value.toLowerCase() == 'eu' ||  this.value.toLowerCase() == 'other') {	
				jQuery('#natiother').css("display","block")
			} else {
				jQuery('#natiother').css("display","none")
			};
		});

		$('input[name="sharedacc"]').on('change', function() {
			if ( this.value.toLowerCase() == 'yes') {	
				jQuery('#accountshared').css("display","block")
			} else {
				jQuery('#accountshared').css("display","none")
			};
		});

		$('select[name="brokergmg"]').on('change', function() {
			if ( this.value.toLowerCase() == 'yes' ) {	
				jQuery('#brokergmgreferrer').css("display","block")
			} else {
				jQuery('#brokergmgreferrer').css("display","none")
			};
		});


		$('.date-picker').datepicker({
			dateFormat: 'mm/dd/yy',
			prevText: '<i class="fa fa-caret-left"></i>',
			nextText: '<i class="fa fa-caret-right"></i>',
			changeYear: true,
			changeMonth: true,
			maxDate: 'now',
			minDate: '-100y',
			yearRange: '-100y:now',
		});
		


		
			// Popup time interval
			$(function() {			

		
				/* Setup Datepicker */
				$('.date-picker').datepicker({
					dateFormat: 'mm/dd/yy',
					prevText: '<i class="fa fa-caret-left"></i>',
					nextText: '<i class="fa fa-caret-right"></i>',
					changeYear: true,
					changeMonth: true,
					maxDate: 'now',
					minDate: '-100y',
					yearRange: '-100y:now',
				});				
			

				$( "#date_from" ).datepicker({
					dateFormat: 'mm/dd/yy',
					prevText: '<i class="fa fa-caret-left"></i>',
					nextText: '<i class="fa fa-caret-right"></i>',
					changeYear: true,
					changeMonth: true,
					onClose: function( selectedDate ) {
						$( "#date_to" ).datepicker( "option", "minDate", selectedDate );
					}
				});

				$( "#date_to" ).datepicker({
					dateFormat: 'mm/dd/yy',
					prevText: '<i class="fa fa-caret-left"></i>',
					nextText: '<i class="fa fa-caret-right"></i>',
					onClose: function( selectedDate ) {
						$( "#date_from" ).datepicker( "option", "maxDate", selectedDate );
					}
				});

				
			});

			
	});
	
});

