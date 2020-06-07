<?php 

use App\Hospital;
use App\Article;
use App\Province;

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
	function getRefinedDate($date,$stringRegex,$monthOnly = false){
		$result = explode($stringRegex, $date);
    	return getMonthName($result[0],$monthOnly);
	}
}

//Get Month Name
if (! function_exists('getMonthName')) {
	function getMonthName($date,$mpnthOnly = false){
		$explodedDate = explode("-", $date);
		if (!$mpnthOnly) {
			# code...
			$years = $explodedDate[0];
			$days = $explodedDate[2];
		}else{
			$days = "";
			$years = "";
		}
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

	 	return multiArraySort($recovered,"totalRecovered");
	}
}

//Sorting Multidimensional Array Depend of The Key
if (! function_exists('multiArraySort')) {
	# code...
	function multiArraySort($array,$key){
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

//Get Total Hospital Group By Province
if (! function_exists('getGrafikHospital')) {
	# code...
	function getGrafikHospital(){
		$result = array();
		$data = Hospital::select('province', \DB::raw('count(*) as total'))
                 ->groupBy('province')
                 ->get();
        for ($i=0; $i < sizeof($data); $i++) { 
        	# code...
        	$result['province'][$i] = Province::find($data[$i]['province'],['province_name'])['province_name'];
        	$result['total'][$i] = $data[$i]['total'];
        }
        return $result;
	}
}

//Get Total Article Created Per Month
if (! function_exists('getGrafikArticle')) {
	# code...
	function getGrafikArticle(){
		$result = array();
		$data = Article::select(\DB::raw('created_at, count(id) as `data`'),
			\DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->groupby('year','month')
			->get();
		for ($i=0; $i < sizeof($data); $i++) { 
			# code...
			$result['new_date'][$i] = getRefinedDate($data[$i]['created_at']," ",true);
			$result['data'][$i] = $data[$i]['data'];
		}
		return $result;
	}
}

if (! function_exists('storeImage')) {
	# code...
	function storeImage($image,$path){
		$imageName =  $image['name'];
		$imageTmp =  $image['tmp_name'];
		$exploded = explode(".", $imageName);
		$eks = end($exploded);
		$validate = ['png','jpg','jpeg'];
		if (!in_array($eks, $validate)) {
			# code...
			return redirect($_SERVER['PHP_SELF'])->with('error','Yang Anda Input Bukan Foto!');
		}
		$newName = sha1(time()).".".$eks;
		$path = public_path($path);
		if (!file_exists($path)) {
		    mkdir($path, 0777, true);
		}
		move_uploaded_file($imageTmp, $path."/".$newName);
		return $newName;
	}
}

?>