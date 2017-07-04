<?php



	/* POST data */
	$platform = (isset($_POST["platform"])) ? strip_tags(trim($_POST["platform"])) : false;

	$accountbasecurrency = (isset($_POST["accountbasecurrency"])) ? strip_tags(trim($_POST["accountbasecurrency"])) : false;

	$title = (isset($_POST["title"])) ? strip_tags(trim($_POST["title"])) : false;

	$first_name = (isset($_POST["first_name"])) ? strip_tags(trim($_POST["first_name"])) : false;

	$last_name = (isset($_POST["last_name"])) ? strip_tags(trim($_POST["last_name"])) : false;

	$countryphone = (isset($_POST["countryphone"])) ? strip_tags(trim($_POST["countryphone"])) : false;

	$ccode = (isset($_POST["ccode"])) ? strip_tags(trim($_POST["ccode"])) : false;

	$ptelephone = (isset($_POST["ptelephone"])) ? strip_tags(trim($_POST["ptelephone"])) : false;

	$email = (isset($_POST["email"])) ? strip_tags(trim($_POST["email"])) : false;

	$password4 = (isset($_POST["password4"])) ? strip_tags(trim($_POST["password4"])) : false;

	$password4b = (isset($_POST["password4b"])) ? strip_tags(trim($_POST["password4b"])) : false;





	$body = '
	<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>GMG</title>
	</head>
	<body bgcolor="#fff" style="width: 100% !important; height: 100%; font-family: Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">

<div style="padding: 20px; margin: 20px; border: 1px solid #bebebe;">
<h1 style="background: #0B62A6; text-align: center; border-bottom: 1px solid #bebebe; border-top: 1px solid #bebebe; padding: 10px 0 10px 0;"><span style="color: #fff;">Demo Account Application</span></h1>
<br style="color: #002e62;" />
<table style="width: 100%;">
<tbody>
<tr>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Platform:</strong> '.$platform.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Account Base Currency:</strong> '.$accountbasecurrency.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Title:</strong> '.$title.'</p>
</td>
</tr>
<tr>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>First Name:</strong> '.$first_name.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Last Name:</strong> '.$last_name.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Country:</strong> '.$countryphone.'</p>
</td>
</tr>
<tr>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Code Country:</strong> '.$ccode.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Mobile phone number:</strong> '.$ptelephone.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Email address:</strong> '.$email.'</p>
</td>
</tr>
<tr>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Password:</strong> '.$password4.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">
<p style="font-weight: normal; font-size: 16px; color: #0a4e7f;"><strong>Confirm Password:</strong> '.$password4b.'</p>
</td>
<td style="border: 1px solid #ffffff; padding: 10px; background: #e8f1f6 none repeat scroll 0% 0%; border-radius: 5px; width: 33%; text-align: left; vertical-align: top;">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
	</body>
	</html>
	';

	// Cargando las variables desde el formulario
	$asunto = 'GMG Demo'.' - '.$first_name.' '.$last_name;
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

