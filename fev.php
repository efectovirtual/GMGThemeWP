	<?php
		// Obtenemos el ID lenguaje
		$curr_lang = ICL_LANGUAGE_CODE;
		

			switch ($curr_lang) {
				case 'es': 	$Lpage = "1301";		break;
				
				case 'cn': 	$Lpage = "2706";		break;
				
				default:	$Lpage = "1292";		break;
			}
		
    ?>

  		<!-- 
  		if($curr_lang == 'es'){
			$Lpage = "1301";
		}else{
			if$curr_lang == 'cn'){
				$Lpage = "2706";
			}else{
				$Lpage = "1292";
			}
		} -->