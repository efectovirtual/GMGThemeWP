<?php

	include ("class-risk.php");



	/* POST data */
	$platform = (isset($_POST["platform"])) ? strip_tags(trim($_POST["platform"])) : false;

	$accountbasecurrency = (isset($_POST["accountbasecurrency"])) ? strip_tags(trim($_POST["accountbasecurrency"])) : false;

	$title = (isset($_POST["title"])) ? strip_tags(trim($_POST["title"])) : false;

	$first_name = (isset($_POST["first_name"])) ? strip_tags(trim($_POST["first_name"])) : false;

	$middle_name = (isset($_POST["middle_name"])) ? strip_tags(trim($_POST["middle_name"])) : false;

	$last_name = (isset($_POST["last_name"])) ? strip_tags(trim($_POST["last_name"])) : false;

	$gender = (isset($_POST["gender"])) ? strip_tags(trim($_POST["gender"])) : false;

	$email = (isset($_POST["email"])) ? strip_tags(trim($_POST["email"])) : false;

	$countryphone = (isset($_POST["countryphone"])) ? strip_tags(trim($_POST["countryphone"])) : false;

	$ccode = (isset($_POST["ccode"])) ? strip_tags(trim($_POST["ccode"])) : false;

	$ptelephone = (isset($_POST["ptelephone"])) ? strip_tags(trim($_POST["ptelephone"])) : false;

	$stelephone = (isset($_POST["stelephone"])) ? strip_tags(trim($_POST["stelephone"])) : false;

	$address01 = (isset($_POST["address01"])) ? strip_tags(trim($_POST["address01"])) : false;

	$address02 = (isset($_POST["address02"])) ? strip_tags(trim($_POST["address02"])) : false;

	$city = (isset($_POST["city"])) ? strip_tags(trim($_POST["city"])) : false;

	$state = (isset($_POST["state"])) ? strip_tags(trim($_POST["state"])) : false;

	$country = (isset($_POST["country"])) ? strip_tags(trim($_POST["country"])) : false;

	$zipcode = (isset($_POST["zipcode"])) ? strip_tags(trim($_POST["zipcode"])) : false;

	$tenancy = (isset($_POST["tenancy"])) ? strip_tags(trim($_POST["tenancy"])) : false;

	$address3year = (isset($_POST["address3year"])) ? strip_tags(trim($_POST["address3year"])) : false;

	$address01b = (isset($_POST["address01b"])) ? strip_tags(trim($_POST["address01b"])) : false;

	$address02b = (isset($_POST["address02b"])) ? strip_tags(trim($_POST["address02b"])) : false;

	$cityb = (isset($_POST["cityb"])) ? strip_tags(trim($_POST["cityb"])) : false;

	$stateb = (isset($_POST["stateb"])) ? strip_tags(trim($_POST["stateb"])) : false;

	$countryb = (isset($_POST["countryb"])) ? strip_tags(trim($_POST["countryb"])) : false;

	$zipcodeb = (isset($_POST["zipcodeb"])) ? strip_tags(trim($_POST["zipcodeb"])) : false;

	$residentusa = (isset($_POST["residentusa"])) ? strip_tags(trim($_POST["residentusa"])) : false;

	$message = (isset($_POST["message"])) ? strip_tags(trim($_POST["message"])) : false;

	$date = (isset($_POST["date"])) ? strip_tags(trim($_POST["date"])) : false;

	$nationality = (isset($_POST["nationality"])) ? strip_tags(trim($_POST["nationality"])) : false;

	$sharedacc = (isset($_POST["sharedacc"])) ? strip_tags(trim($_POST["sharedacc"])) : false;

	$politicaloffice = (isset($_POST["politicaloffice"])) ? strip_tags(trim($_POST["politicaloffice"])) : false;

	$accounthn = (isset($_POST["accounthn"])) ? strip_tags(trim($_POST["accounthn"])) : false;

	$namebank = (isset($_POST["namebank"])) ? strip_tags(trim($_POST["namebank"])) : false;

	$bankaccount = (isset($_POST["bankaccount"])) ? strip_tags(trim($_POST["bankaccount"])) : false;

	$sortcodern = (isset($_POST["sortcodern"])) ? strip_tags(trim($_POST["sortcodern"])) : false;

	$iban = (isset($_POST["iban"])) ? strip_tags(trim($_POST["iban"])) : false;

	$swift = (isset($_POST["swift"])) ? strip_tags(trim($_POST["swift"])) : false;

	$employment_status = (isset($_POST["employment_status"])) ? strip_tags(trim($_POST["employment_status"])) : false;

	$currency_provide = (isset($_POST["currency_provide"])) ? strip_tags(trim($_POST["currency_provide"])) : false;

	$industries_employment = (isset($_POST["industries_employment"])) ? strip_tags(trim($_POST["industries_employment"])) : false;

	$job_employment = (isset($_POST["job_employment"])) ? strip_tags(trim($_POST["job_employment"])) : false;

	$provide_annual_amount = (isset($_POST["provide_annual_amount"])) ? strip_tags(trim($_POST["provide_annual_amount"])) : false;

	$indicate_annual_liquid = (isset($_POST["indicate_annual_liquid"])) ? strip_tags(trim($_POST["indicate_annual_liquid"])) : false;

	$indicate_annual_available = (isset($_POST["indicate_annual_available"])) ? strip_tags(trim($_POST["indicate_annual_available"])) : false;

	$indicate_source_trading = (isset($_POST["indicate_source_trading"])) ? strip_tags(trim($_POST["indicate_source_trading"])) : false;

	$other_indicate_annual_available = (isset($_POST["other_indicate_annual_available"])) ? strip_tags(trim($_POST["other_indicate_annual_available"])) : false;

	$experience_10years = (isset($_POST["experience_10years"])) ? strip_tags(trim($_POST["experience_10years"])) : false;

	$professional_academic = (isset($_POST["professional_academic"])) ? strip_tags(trim($_POST["professional_academic"])) : false;

	$webinars_courses_Forex = (isset($_POST["webinars_courses_Forex"])) ? strip_tags(trim($_POST["webinars_courses_Forex"])) : false;

	$webinars_financial_instrument = (isset($_POST["webinars_financial_instrument"])) ? strip_tags(trim($_POST["webinars_financial_instrument"])) : false;

	$level_education = (isset($_POST["level_education"])) ? strip_tags(trim($_POST["level_education"])) : false;

	$demoaccount = (isset($_POST["demoaccount"])) ? strip_tags(trim($_POST["demoaccount"])) : false;

	$forex = (isset($_POST["forex"])) ? strip_tags(trim($_POST["forex"])) : false;

	$CFDs = (isset($_POST["CFDs"])) ? strip_tags(trim($_POST["CFDs"])) : false;

	$equities_bonds = (isset($_POST["equities_bonds"])) ? strip_tags(trim($_POST["equities_bonds"])) : false;

	$equity_indices = (isset($_POST["equity_indices"])) ? strip_tags(trim($_POST["equity_indices"])) : false;

	$commodity_futures_options = (isset($_POST["commodity_futures_options"])) ? strip_tags(trim($_POST["commodity_futures_options"])) : false;

	$spread_betting = (isset($_POST["spread_betting"])) ? strip_tags(trim($_POST["spread_betting"])) : false;

	$forexf = (isset($_POST["forexf"])) ? strip_tags(trim($_POST["forexf"])) : false;

	$CFDsf = (isset($_POST["CFDsf"])) ? strip_tags(trim($_POST["CFDsf"])) : false;

	$equities_bondsf = (isset($_POST["equities_bondsf"])) ? strip_tags(trim($_POST["equities_bondsf"])) : false;

	$equity_indicesf = (isset($_POST["equity_indicesf"])) ? strip_tags(trim($_POST["equity_indicesf"])) : false;

	$commodity_futures_optionsf = (isset($_POST["commodity_futures_optionsf"])) ? strip_tags(trim($_POST["commodity_futures_optionsf"])) : false;

	$spread_bettingf = (isset($_POST["spread_bettingf"])) ? strip_tags(trim($_POST["spread_bettingf"])) : false;

	$forexv = (isset($_POST["forexv"])) ? strip_tags(trim($_POST["forexv"])) : false;

	$CFDsv = (isset($_POST["CFDsv"])) ? strip_tags(trim($_POST["CFDsv"])) : false;

	$equities_bondsv = (isset($_POST["equities_bondsv"])) ? strip_tags(trim($_POST["equities_bondsv"])) : false;

	$equity_indicesv = (isset($_POST["equity_indicesv"])) ? strip_tags(trim($_POST["equity_indicesv"])) : false;

	$commodity_futures_optionsv = (isset($_POST["commodity_futures_optionsv"])) ? strip_tags(trim($_POST["commodity_futures_optionsv"])) : false;

	$spread_bettingv = (isset($_POST["spread_bettingv"])) ? strip_tags(trim($_POST["spread_bettingv"])) : false;

	$sufficient_information_comp = (isset($_POST["sufficient_information_comp"])) ? strip_tags(trim($_POST["sufficient_information_comp"])) : false;

	$holding_investments = (isset($_POST["holding_investments"])) ? strip_tags(trim($_POST["holding_investments"])) : false;

	$understood_information = (isset($_POST["understood_information"])) ? strip_tags(trim($_POST["understood_information"])) : false;

	$understanding_trading = (isset($_POST["understanding_trading"])) ? strip_tags(trim($_POST["understanding_trading"])) : false;

	$further_payments = (isset($_POST["further_payments"])) ? strip_tags(trim($_POST["further_payments"])) : false;

	$execute_orders = (isset($_POST["execute_orders"])) ? strip_tags(trim($_POST["execute_orders"])) : false;

	$close_trade = (isset($_POST["close_trade"])) ? strip_tags(trim($_POST["close_trade"])) : false;

	$loss_orders = (isset($_POST["loss_orders"])) ? strip_tags(trim($_POST["loss_orders"])) : false;

	$gmg_client_greement = (isset($_POST["gmg_client_greement"])) ? strip_tags(trim($_POST["gmg_client_greement"])) : false;

	$gmg_market_greement2 = (isset($_POST["gmg_market_greement2"])) ? strip_tags(trim($_POST["gmg_market_greement2"])) : false;

	$market_data_declaration = (isset($_POST["market_data_declaration"])) ? strip_tags(trim($_POST["market_data_declaration"])) : false;

	$over18years = (isset($_POST["over18years"])) ? strip_tags(trim($_POST["over18years"])) : false;

	$password4 = (isset($_POST["password4"])) ? strip_tags(trim($_POST["password4"])) : false;

	$signingterms = (isset($_POST["signingterms"])) ? strip_tags(trim($_POST["signingterms"])) : false;



	$nationality_specify = (isset($_POST["nationality_specify"])) ? strip_tags(trim($_POST["nationality_specify"])) : false;

	$accountshared = (isset($_POST["accountshared"])) ? strip_tags(trim($_POST["accountshared"])) : false;

	$brokergmg = (isset($_POST["brokergmg"])) ? strip_tags(trim($_POST["brokergmg"])) : false;

	$brokergmgreferrer = (isset($_POST["brokergmgreferrer"])) ? strip_tags(trim($_POST["brokergmgreferrer"])) : false;

	$level_transactions = (isset($_POST["level_transactions"])) ? strip_tags(trim($_POST["level_transactions"])) : false;

	$portfolio_exceed = (isset($_POST["portfolio_exceed"])) ? strip_tags(trim($_POST["portfolio_exceed"])) : false;

	$worked_financial = (isset($_POST["worked_financial"])) ? strip_tags(trim($_POST["worked_financial"])) : false;


// Risk Level


	// $employment_status = "Employed";
	// $experience_10years = "Yes";
	// $professional_academic = "Yes";
	// $webinars_courses_Forex = "Yes";
	// $webinars_financial_instrument = "Yes";
	// $level_education = "Professional Qualification";
	// $demoaccount = "Yes";
	// $forex = "More than 8 years";
	// $CFDs = "More than 8 years";
	// $equities_bonds = "More than 8 years";
	// $equity_indices = "More than 8 years";
	// $commodity_futures_options = "More than 8 years";
	// $spread_betting = "More than 8 years";
	// $forexf = "More than 50 trades";
	// $CFDsf = "More than 50 trades";
	// $equities_bondsf = "More than 50 trades";
	// $equity_indicesf = "More than 50 trades";
	// $commodity_futures_optionsf = "More than 50 trades";
	// $spread_bettingf = "More than 50 trades";
	// $forexv = "More than 100,000";
	// $CFDsv = "More than 100,000";
	// $equities_bondsv = "More than 100,000";
	// $equity_indicesv = "More than 100,000";
	// $commodity_futures_optionsv = "More than 100,000";
	// $spread_bettingv = "More than 100,000";
	// $sufficient_information_comp = "Yes";
	// $understood_information = "Yes";
	// $understanding_trading = "Yes";
	// $further_payments = "Yes";
	// $execute_orders = "Yes";
	// $close_trade = "Yes";
	// $loss_orders = "Yes";
	// $holding_investments = "Long term investments (more than 6 months)";
 	

 	$RiskS = new RiskScoring();


	$QSemployment_status = $RiskS->answers1($employment_status);


	$QSexperience_10years = $RiskS->answers2($experience_10years,5);
	$QSprofessional_academic = $RiskS->answers2($professional_academic,4);
	$QSwebinars_courses_Forex = $RiskS->answers2($webinars_courses_Forex,3);
	$QSwebinars_financial_instrument = $RiskS->answers2($webinars_financial_instrument,2);
	$QSdemoaccount = $RiskS->answers2($demoaccount,1);
	$QSlevel_education = $RiskS->answers3($level_education);	


	$QSforex = $RiskS->answers4($forex);
	$QSCFDs = $RiskS->answers4($CFDs);
	$QSequities_bonds = $RiskS->answers4($equities_bonds);
	$QSequity_indices = $RiskS->answers4($equity_indices);
	$QScommodity_futures_options = $RiskS->answers4($commodity_futures_options);
	$QSspread_betting = $RiskS->answers4($spread_betting);


	$QSforexf = $RiskS->answers5($forexf);
	$QSCFDsf = $RiskS->answers5($CFDsf);
	$QSequities_bondsf = $RiskS->answers5($equities_bondsf);
	$QSequity_indicesf = $RiskS->answers5($equity_indicesf);
	$QScommodity_futures_optionsf = $RiskS->answers5($commodity_futures_optionsf);
	$QSspread_bettingf = $RiskS->answers5($spread_bettingf);


	$QSforexv = $RiskS->answers6($forexv);
	$QSCFDsv = $RiskS->answers6($CFDsv);
	$QSequities_bondsv = $RiskS->answers6($equities_bondsv);
	$QSequity_indicesv = $RiskS->answers6($equity_indicesv);
	$QScommodity_futures_optionsv = $RiskS->answers6($commodity_futures_optionsv);
	$QSspread_bettingv = $RiskS->answers6($spread_bettingv);

	
	$QSsufficient_information_comp = $RiskS->answers2($sufficient_information_comp,2);
	$QSunderstood_information = $RiskS->answers2($understood_information,2);
	$QSunderstanding_trading = $RiskS->answers2($understanding_trading,2);
	$QSfurther_payments = $RiskS->answers2($further_payments,2);
	$QSexecute_orders = $RiskS->answers2($execute_orders,2);
	$QSclose_trade = $RiskS->answers2($close_trade,2);
	$QSloss_orders = $RiskS->answers2($loss_orders,2);
	$QSholding_investments = $RiskS->answers7($holding_investments);

	$Q1 = $QSemployment_status;

	$Q2 = $QSexperience_10years + $QSprofessional_academic + $QSwebinars_courses_Forex + $QSwebinars_financial_instrument + $QSdemoaccount + $QSlevel_education;

	$Q3 = $QSforex + $QSCFDs + $QSequities_bonds + $QSequity_indices + $QScommodity_futures_options + $QSspread_betting;

	$Q4 = $QSforexf + $QSCFDsf + $QSequities_bondsf + $QSequity_indicesf + $QScommodity_futures_optionsf + $QSspread_bettingf;

	$Q5 = $QSforexv + $QSCFDsv + $QSequities_bondsv + $QSequity_indicesv + $QScommodity_futures_optionsv + $QSspread_bettingv;

	$Q6 = $QSsufficient_information_comp + $QSunderstood_information + $QSunderstanding_trading + $QSfurther_payments + $QSexecute_orders + $QSclose_trade + $QSloss_orders + $QSholding_investments;


	
	$Q1f = number_format(($Q1/1)*100);
	$Q2f = number_format(($Q2/20)*100);
	$Q3f = number_format(($Q3/30)*100);
	$Q4f = number_format(($Q4/24)*100);
	$Q5f = number_format(($Q5/18)*100);
	$Q6f = number_format(($Q6/16)*100);

	$total = $Q1f+$Q2f+$Q3f+$Q4f+$Q5f+$Q6f;

// Fin Risk Level


	$body = '
	<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>GMG</title>
	</head>
	<body bgcolor="#fff" style="width: 100% !important; height: 100%; font-family: Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">

	<div style="padding: 20px; margin: 20px; border: 1px solid #bebebe;">

	<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">[1] Personal<br /></span></h1>
	<h2><span style="color: #002e62;">PRODUCTS</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Platform:</strong> '.$platform.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Account Base Currency:</strong> '.$accountbasecurrency.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<br />
	<h2><span style="color: #002e62;">CONTACT INFORMATION</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Title:</strong> '.$title.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>First Name:</strong> '.$first_name.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Middle Name:</strong> '.$middle_name.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Last Name:</strong> '.$last_name.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Gender:</strong> '.$gender.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Your email:</strong> '.$email.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Country:</strong> '.$countryphone.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Code:</strong> '.$ccode.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Primary Telephone:</strong> '.$ptelephone.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 20%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Secondary Telephone:</strong> '.$stelephone.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<br />
	<h2><span style="color: #002e62;">ADDRESS</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Address Line One:</strong> '.$address01.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Address Line Two:</strong> '.$address02.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>City:</strong> '.$city.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>State:</strong> '.$state.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Country:</strong> '.$country.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Postal Code (Zip/Post):</strong> '.$zipcode.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Tenancy:</strong> '.$tenancy.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Have you lived at the above address for 3 years or more?:</strong> '.$address3year.'</p>
	</td>
	</tr>
	<tr>
	<td colspan="4"><br />
	<h2><span style="color: #002e62;">PROVIDE YOUR PREVIOUS ADDRESS</span></h2>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Address Line One:</strong> '.$address01b.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Address Line Two:</strong> '.$address02b.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>City:</strong> '.$cityb.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>State:</strong> '.$stateb.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Country:</strong> '.$countryb.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Postal Code (Zip/Post):</strong> '.$zipcodeb.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="4">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Are you a US Citizen or Resident, hold a US address or telephone number, transfer funds to a US bank account or have Power of Attorney or signatory authority for any US Citizen, Resident or person with a US address?:</strong> '.$residentusa.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="4">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Please explain your connection the the USA:</strong> '.$message.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Date of Birth:</strong> '.$date.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Nationality:</strong> '.$nationality.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="4">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Please specify Nationality:</strong> '.$nationality_specify.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Will this account be shared with anyone or traded by anyone other than yourself?:</label></strong> '.$sharedacc.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Do you currently or during the last 12 months hold a political office, or have ties to a politically active person?:</label></strong> '.$politicaloffice.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="4">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please specify:</label></strong> '.$accountshared.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h2><span style="color: #002e62;"><br />PLEASE PROVIDE A BANK ACCOUNT TO LINK TO YOUR TRADING ACCOUNT<br /></span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Account Holder Name:</strong> '.$accounthn.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Name of Bank:</strong> '.$namebank.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Bank Account Number:</strong> '.$bankaccount.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Sort Code or Routing Number:</strong> '.$sortcodern.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>IBAN:</strong> '.$iban.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>SWIFT Code:</strong> '.$swift.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="3">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Were you introduced by another client or Introducing Broker to GMG?:</strong> '.$brokergmg.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="3">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Please specify Referrer:</strong> '.$brokergmgreferrer.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">[2] Suitability</span></h1>
	<h2><span style="color: #002e62;">EMPLOYMENT AND FINANCIAL BACKGROUND</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please confirm your employment status:</label></strong> '.$employment_status.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please provide the currency you will provide your answers in:</label></strong> '.$currency_provide.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Industries:</strong> '.$industries_employment.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Job Position:</label></strong> '.$job_employment.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please provide your annual income amount:</label></strong> '.$provide_annual_amount.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please indicate the amount of your liquid assets (savings and investments):</label></strong> '.$indicate_annual_liquid.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please indicate the amount of funds you have available for trading:</label></strong> '.$indicate_annual_available.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Please indicate the source of your trading funds:</label></strong> '.$indicate_source_trading.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;"></td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Please Specify:</strong> '.$other_indicate_annual_available.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h2><span style="color: #002e62;"><br />SUITABILITY<br /></span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Do you have any relevant work experience during the last 10 years that provides you with a good understanding of the risks of trading in Financial Instruments?:</label></strong> '.$experience_10years.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Do you have any professional or academic qualifications that provide you with a good understanding of the risks of trading with leveraged products?:</label></strong> '.$professional_academic.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Have you attended seminars, webinars or courses on Forex/ CFDs?:</label></strong> '.$webinars_courses_Forex.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Have you attended seminars, webinars or courses in any other financial instrument?:</label></strong> '.$webinars_financial_instrument.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Level of education:</strong> '.$level_education.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Do you have a Demo Account with the Company?:</strong> '.$demoaccount.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h2><span style="color: #002e62;"><br />CATEGORISATION<br /></span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Have you executed a significant level of transactions in one particular financial market with an average frequency of ten trades per quarter within the last four (4) quarters?:</label></strong> '.$level_transactions.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Does the value of your portfolio (cash plus financial instruments) exceed 500,000 &euro;?:</label></strong> '.$portfolio_exceed.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;" colspan="2">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Do you work or have worked in the financial sector for at least one year in a professional position, which requires knowledge of the transactions or services envisaged?:</label></strong> '.$worked_financial.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">[3] Investments</span></h1>
	<h2><span style="color: #002e62;">TRADING EXPERIENCE<br /></span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Forex:</strong> '.$forex.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>CFD&rsquo;s:</strong> '.$CFDs.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Equities / Bonds:</strong> '.$equities_bonds.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Equity Indices:</strong> '.$equity_indices.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Commodity Futures/Options:</strong> '.$commodity_futures_options.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Spread Betting:</strong> '.$spread_betting.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h2></h2>
	<h2><span style="color: #002e62;">TRADING FREQUENCY<br /></span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Forex:</strong> '.$forexf.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>CFD&rsquo;s:</strong> '.$CFDsf.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Equities / Bonds:</strong> '.$equities_bondsf.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Equity Indices:</strong> '.$equity_indicesf.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Commodity Futures/Options:</strong> '.$commodity_futures_optionsf.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Spread Betting:</strong> '.$spread_bettingf.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h2></h2>
	<h2><span style="color: #002e62;">VOLUME OF TRANSACTIONS WITHIN THE LAST 12 MONTHS</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Forex:</strong> '.$forexv.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>CFD&rsquo;s:</strong> '.$CFDsv.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Equities / Bonds:</strong> '.$equities_bondsv.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Equity Indices:</strong> '.$equity_indicesv.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Commodity Futures/Options:</strong> '.$commodity_futures_optionsv.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 33%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Spread Betting:</strong> '.$spread_bettingv.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">[4] Declaration<br /></span></h1>
	<h2><span style="color: #002e62;">DECLARATION FOR INVESTMENT EXPERIENCE</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">Have you received sufficient information from the Company in relation to its investment services and products?:</label></strong> '.$sufficient_information_comp.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label2">How long will you be holding your investments / trades?:</label></strong> '.$holding_investments.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label3">Have you understood all the information provided to you by the Company in relation to its investment services and products?:</label></strong> '.$understood_information.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label3">Do you have a good understanding that trading on OTC Derivatives is different from other types of financial investments and you do not own, or have any rights in the underlying assets?:</label></strong> '.$understanding_trading.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label4">Do you have a good understanding that the concepts of margin and leverage apply to this account, which means that when you trade on OTC Derivatives, you could lose substantially more than your initial deposit or margin payment and you might have to make further payments.:</label></strong> '.$further_payments.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label4">Do you have a good understanding that the concepts of volatility and market liquidity apply to trading on OTC Derivatives on this account, which means that market circumstances may impact on pricing and our ability to generate prices or to execute orders.:</label></strong> '.$execute_orders.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label3">Do you have a good understanding that trades on OTC Derivatives are placed on our online platform, which means you need to be familiar with using it, including how to open and close a trade?:</label></strong> '.$close_trade.'</p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 25%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong><label class="label3">Do you have a good understanding that it is your responsibility to monitor your orders and to manage the risks of your trading by using tools such as stop loss orders?:</label></strong> '.$loss_orders.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">[5] Agreement<br /></span></h1>
	<h2><span style="color: #002e62;">AGREEMENT CONSENT</span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>I confirm, I have read and agree to the GMG Client Agreement, Best Execution Policy, Privacy Policy, Terms and Conditions and Risk Disclosure Policy:</strong> '.$gmg_client_greement.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>I confirm, I have read and agree to the GMG Market Information Sheets:</strong> '.$gmg_market_greement2.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Market Data Declaration. The Client/you will access or use Market Data in accordance with the following: (a) you will access and use the Account open with GMG and Market Data solely in your personal capacity and not on behalf of a company;(b) you will use the Market Data solely in relation to the management of your personal funds and not as an investment advisor, broker to the public or for the investment of third party or corporate funds; (c) if you are employed by an organisation carrying out professional financial or investment activities and/or if you are currently registered or qualified as a professional securities trader or investment advisor with any national or regional exchange, regulatory authority or professional association, you represent and warrent that your access to the Market Data will be strictly for your sole personal use only; and (d) you will not to distribute, disseminate, republish or make available any Market Data to any third party in any manner whatsoever.:</strong> '.$market_data_declaration.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>I confirm and declare that I am over 18 years of age and that answers and information provided in this Account Application are true and correct and undertake to notify GMG in writing, if there are any changes to this data. I guarantee that I do not breach any regulations of my country of residence in trading with GMG:</strong> '.$over18years.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Please enter a 4-digit security passcode:</strong> '.$password4.'</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 100%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>By signing below, I represent that I have read and agree to be bound by all of the terms provided above.:</strong> '.$signingterms.'</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">Risk Level</span></h1>

	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Category No.</strong></p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Category Description</strong></p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Risk level per section</strong></p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Maximum Risk Level per secion</strong></p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Total Risk Level</strong></p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">1</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: left;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">EMPLOYMENT</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q1.'</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">1</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q1f.'%</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">2</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: left;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">INVESTMENT EXPERIENCE KNOWLEDGE OF THE APPLICANT</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q2.'</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">20</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q2f.'%</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">3</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: left;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">TRADING EXPERIENCE</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q3.'</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">30</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q3f.'%</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">4</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: left;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">TRADING FREQUENCY</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q4.'</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">24</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q4f.'%</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">5</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: left;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">VOLUME OF TRANSACTIONS WITHIN THE LAST 12 MONTHS</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q5.'</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">18</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q5f.'%</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 10%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">6</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 40%; text-align: left;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">UNDERSTANDING OF PRODUC</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q6.'</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">16</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">'.$Q6f.'%</p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; border-radius: 5px; width: 10%; text-align: center;"></td>
	<td style="border: 1px solid #ffffff; padding: 10px; border-radius: 5px; width: 40%; text-align: center;"></td>
	<td style="border: 1px solid #ffffff; padding: 10px; border-radius: 5px; width: 15%; text-align: center;"></td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #2178BD none repeat scroll 0% 0%; border-radius: 5px; width: 15%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #fff;"><strong>Final Risk Level</strong></p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #2178BD none repeat scroll 0% 0%; border-radius: 5px; width: 20%; text-align: center;">
	<p style="font-weight: normal; font-size: 30px; color: #fff;">'.number_format($total/6).'%</p>
	</td>
	</tr>
	</tbody>
	</table>
	<h2><span style="color: #002e62;"></span></h2>
	<table style="width: 100%;">
	<tbody>
	<tr>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #D6D6D6 none repeat scroll 0% 0%; border-radius: 5px; width: 50%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>RISK CATEGORY</strong></p>
	</td>
	<td style="border: 1px solid #fff; padding: 10px; background: #D6D6D6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f; text-align: center;"><strong>WITHIN THE RANGE OF:</strong></p>
	</td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">Not appropriate client to trade and rejected with a warning to try again upon being able to upgrade to Bracket A or Bracket B (i.e. Non Experience &amp; Non Educated).</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 50%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>0% - 25%</strong></p>
	<strong></strong></td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">Not appropriate client to trade but not rejected (i.e. Non Experienced &amp; Educated or Experienced &amp; Non Educated);</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 50%; text-align: center;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>26% - 60%</strong></p>
	<strong></strong></td>
	</tr>
	<tr>
	<td style="border: 1px solid #fff; padding: 10px; background: #E8F1F6; border-radius: 5px; width: 50%;">
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;">Appropriate client to trade (i.e. Experienced &amp; Educated);</p>
	</td>
	<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 50%; text-align: center;"><strong></strong>
	<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>61% - 100%</strong></p>
	</td>
	</tr>
	</tbody>
	</table>
	</div>

	</body>
	</html>
	';

	// Cargando las variables desde el formulario
	$asunto = 'GMG Apply'.' - '.$first_name.' '.$last_name;
	$nombre = $first_name.' '.$last_name;
	$correo = "ncooke@gmgmarkets.com";

	$encabezado = "MINE-Version: 1.0\r\n";
	$encabezado .= "content-type: text/html; charset=UTF-8\r\n";
	$encabezado .= "From: $nombre <$correo>\r\n";
	$encabezado .= "Reply-To: $correo\r\n";

	// Si todo está correcto enviamos el correo
	 mail($correo, $asunto, $body, $encabezado); 




?>


<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>GMG</title>
</head>
	<body>

		<?php echo '<div class="success-message unit"><i class="fa fa-check"></i>Your information has been sent successfully - GMG</div>';
		 ?>

	</body>
</html>

