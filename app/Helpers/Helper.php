<?php


//Get Graphic of Indonesia Country
if (! function_exists('getGrafikIndo')) {
    function getGrafikIndo()
    {

 		$data = Http::get('https://api.covid19api.com/country/indonesia');
 		$data = $data->json();
 		$result = array();

 		for ($i = 0; $i < sizeof($data) ; $i++) { 
 			# code...
 			if ($i != sizeof($data)-1) {
 				# code...
 				if ($i!=0) {
 					# code...
 					$result['newConfirmed'][$i]= $data[$i]['Confirmed'] - $data[$i-1]['Confirmed'];
 				}else{
 					$result['newConfirmed'][$i] = $data[$i]['Confirmed'];
 				}
 				$result['dateConfirmed'][$i] = getRefinedDate($data[$i]['Date'],"T");
 			}
 		}
 		return $result;
    }
}

//Get Refined Date
if (! function_exists('getRefinedDate')) {
	function getRefinedDate($date,$stringRegex){
		$result = explode($stringRegex, $date);
    	return getMonthName($result[0]);
	}
}

//Get Month Name
if (! function_exists('getMonthName')) {
	function getMonthName($date){
		$explodedDate = explode("-", $date);
		$years = $explodedDate[0];
		$days = $explodedDate[2];
		$numericMonth = $explodedDate[1];
		switch ($numericMonth) {
			case '01':
				return $days." Jan ".$years;
			case '02':
				return $days." Feb ".$years;
			case '03':
				return $days." Mar ".$years;
			case '04':
				return $days." Apr ".$years;
			case '05':
				return $days." Mei ".$years;
			case '06':
				return $days." Jun ".$years;
			case '07':
				return $days." Jul ".$years;
			case '08':
				return $days." Agu ".$years;
			case '09':
				return $days." Sep ".$years;
			case '10':
				return $days." Okt ".$years;
			case '11':
				return $days." Nov ".$years;
			case '12':
				return $days." Des ".$years;
			default:
				return "Invalid Month Index!";
				break;
		}

	}
}

//Get Percent Between Death and Recovered
if (! function_exists('parseToPercent')) {
	function parseToPercent($death,$recovered){
		$death = parseToValidNumeric(",",$death);
		$recovered = parseToValidNumeric(",",$recovered);
		$total = $death + $recovered;
		if ($total == 0) {
			# code...
			return $total;
		}
		$data = array();
		$data['death'] = ($death/$total)*100;
		$data['recov'] = ($recovered/$total)*100; 
		return $data;
	}
}

//Get Valid Numeric Form
if (! function_exists('parseToValidNumeric')) {
	function parseToValidNumeric($delimiter,$string){
		$explodedString = explode($delimiter, $string);
		$result = "";
		if (sizeof($explodedString)>1) {
			for ($i=0; $i < sizeof($explodedString) ; $i++) {
				# code...
				$result .= $explodedString[$i];
			}
			return intval($result);
		}else{
			return intval($string);
		}
		return $string;
	}
}

//Get Current Data of Indonesia Country Cases
if (! function_exists('getIndonesiaCases')) {
	function getIndonesiaCases(){
		$data['positif'] = parseToValidNumeric(",", Http::get('https://api.kawalcorona.com/indonesia')->json()[0]['positif']);
        $data['sembuh'] = parseToValidNumeric(",",Http::get('https://api.kawalcorona.com/indonesia')->json()[0]['sembuh']);
        $data['meninggal'] = parseToValidNumeric(",", Http::get('https://api.kawalcorona.com/indonesia')->json()[0]['meninggal']);
		return $data;
	}
}

//Get The 5 Most Recovered Country
if (! function_exists('getMostRecoveredCountry')) {
	function getMostRecoveredCountry(){
		$recovered = array();
		$iter = 0; 
		# code...
		$data = Http::get('https://api.covid19api.com/summary')->json()['Countries'];
		foreach ((array) $data as $key => $value) {
			# code...
			$recovered[$iter]['countryName'] = $value['Country'];
			$recovered[$iter]['totalRecovered'] = parseToPercent($value["TotalDeaths"],$value["TotalRecovered"])['recov'];
			$iter++;
		}

	 	return multiArraySort($recovered,"totalRecovered"); // make ieu bisa teu return na? emang kuduna
	}
}

//Sorting Multidimensional Array Depend of The Key
if (! function_exists('multiArraySort')) {
	# code...
	function multiArraySort($array,$key){ // jadi indexFirst teh nu index pertama teh nomor lain key. emang dina api na. index pertamana indexna ka Country heula ? siga eta
		$temp = array();
		$swapped = false;
		if (sizeof($array)>1) {
			do{
				$swapped = false;
				for ($i=0; $i < sizeof($array) ; $i++) {
					# code...
					if ($i != sizeof($array)-1) {
						if ($array[$i+1][$key]>$array[$i][$key]) {
							$temp = $array[$i+1];
							$array[$i+1] = $array[$i];
							$array[$i] = $temp;
							$swapped = true;
						}
					}
								
				}
			}while($swapped);
		}

		return $array;
	}
}

// Total Infected by province
if (! function_exists('infectedByProvince')){
	#code...
	function infectedByProvince(){
		$infected = array();
		$iter = 0;
		#code...
		$data = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json('');

		foreach ($data as $key => $value) {
			
			$infected['provinceName'][$iter] = $value['attributes']['Provinsi'];
			$infected['totalInfected'][$iter] = $value['attributes']['Kasus_Posi'];
			$iter++;
		}

		return $infected;
	}
}

// Total Infected global
if (! function_exists('infectedGlobalPerCountry')){
	#code...
	function infectedGlobalPerCountry(){
		$infected = array();
		$iter = 0;
		#code...
		$data = Http::get('https://api.covid19api.com/summary')->json()['Countries'];
		foreach ($data as $key => $value) {
			
			$infected[$iter]['Country'] = $value['Country'];
			$infected[$iter]['TotalConfirmed'] = $value['TotalConfirmed'];
			$iter++;
		}
		$infected = multiArraySort($infected,"TotalConfirmed");
		$infected = swap($infected,"Country","TotalConfirmed");
		
		return $infected;
	}
}

// Recovered Global
if(! function_exists('recoveredGlobalPerDay')){
	#code...
	function recoveredGlobalPerDay($country){
		$result = array();
		$iter = 0;
		$url = 'https://api.covid19api.com/country/'.$country;
		$data = Http::get($url)->json();
		for ($i = 0; $i < sizeof($data) ; $i++) { 
			# code...
			if ($i != sizeof($data)-1) {
				# code...
				if ($i!=0) {
					# code...
					$result['recovered'][$i] = $data[$i]['Recovered'] - $data[$i-1]['Recovered'];
				}else{
					$result['recovered'][$i] = $data[$i]['Recovered'];
				}
				$result['day'][$i] = getRefinedDate($data[$i]['Date'],"T");
			}
		}
		//sholat dahar hela yas, meh tenang
		return $result;
	}
}

function swap($array,$key,$key2){ //parameter $key teh jeung ngaswap key nu eta 
	$result = array();
	for ($i=0; $i <sizeof($array) ; $i++) { 
		# code...
		$result[$key][$i] = $array[$i][$key]; 
		$result[$key2][$i] = $array[$i][$key2];
	}
	return $result;
}
?>