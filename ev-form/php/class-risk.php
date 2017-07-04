<?php 


class RiskScoring 
{
	
		function answers1($vselect){

			$score = 0;

			switch ($vselect) {

				case 'Employed':
					$score = 1;
				break;

				case 'Self Employed':
					$score = 1;
				break;

				case 'Unemployed':
					$score = 0;
				break;

				case 'Student':
					$score = 0;
				break;

				case 'Retired':
					$score = 1;
				break;	
			}

			return $score;
		}


		function answers2($vselect,$val){

			$score = 0;

			switch ($vselect) {

				case 'Yes':
					$score = $val;
				break;

				case 'No':
					$score = 0;
				break;			
			}

			return $score;
		}


		function answers3($vselect){

			$score = 0;

			switch ($vselect) {

				case 'High / secondary school':
					$score = 1;
				break;

				case 'Bacherlors Degree':
					$score = 2;
				break;

				case 'Masters Degree':
					$score = 3;
				break;	

				case 'Doctoral Degree':
					$score = 4;
				break;	

				case 'Professional Qualification':
					$score = 5;
				break;				
			}

			return $score;
		}


		function answers4($vselect){

			$score = 0;

			switch ($vselect) {

				case 'Zero':
					$score = 0;
				break;

				case '1-3 years':
					$score = 1;
				break;

				case '4-7 years':
					$score = 3;
				break;	

				case 'More than 8 years':
					$score = 5;
				break;	
			
			}

			return $score;
		}


		function answers5($vselect){

			$score = 0;

			switch ($vselect) {

				case 'Zero':
					$score = 0;
				break;

				case '1-5 trades':
					$score = 1;
				break;

				case '6-20 trades':
					$score = 2;
				break;	

				case '21-50 trades':
					$score = 3;
				break;	

				case 'More than 50 trades':
					$score = 4;
				break;	
			
			}

			return $score;
		}


		function answers6($vselect){

			$score = 0;

			switch ($vselect) {

				case 'Zero':
					$score = 0;
				break;

				case 'Less than 25,000':
					$score = 1;
				break;

				case '25,000-100,000':
					$score = 2;
				break;	

				case 'More than 100,000':
					$score = 3;
				break;	
			
			}

			return $score;
		}


		function answers7($vselect){

			$score = 0;

			switch ($vselect) {

				case 'Very short term investments':
					$score = 0;
				break;

				case 'Short term investments (less than 6 months)':
					$score = 1;
				break;

				case 'Long term investments (more than 6 months)':
					$score = 2;
				break;	
			
			}

			return $score;
		}
}









































 ?>