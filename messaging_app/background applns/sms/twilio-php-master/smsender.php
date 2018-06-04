<?php

 use Twilio\Rest\Client;
require_once "Twilio/autoload.php";

		$connect = new mysqli("localhost","root","","admin");
			//check connection
			if($connect->connect_error){
				die("Connection Failed : ".$connect->connect_error);
			}
				$sql="SELECT * FROM users where PhoneNumberStatus=1";
				$query= $connect->query($sql);
				$x=1;
				$receiver;
				while($row= $query->fetch_assoc()){
					$output['data'][] = array(
						$x,
						$receiver=$row['PhoneNumber']
						
					);
					
					$x++;
					
				}
				//echo $receiver;
				//database connection close
				$connect->close();
				
				/*************** start of the weather api ****** */
$apikey = "0f94460318e397281d32e85c3f2dedcc";
//$kampalaWeatherData = "http://slimapp/api/observations&key=$apikey";
$WeatherData="http://wimea.mak.ac.ug/weatherapi/api/awsCurrentObservations?key=Wkn339SbwwCugskbbofqRYrW9gI06ivoZRjer5NCTWexuxT6x0p9iHDSCEnn";


function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 9);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);	
	return $data;
}

 $goodData = get_data($WeatherData);
 
 $arraydata=explode("},",$goodData);
 
  $data = json_decode( $goodData,true);
 
 


$htmlarg='<table border="1" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th>Station Name</th>
		<th>TABLE ELEMENT NAME</th>
		<th>VALUES</th>
		<th>UNITS</th>
		
	</tr>
	</thead>';
	 for($i=0;$i<sizeof($arraydata);$i++){ 
	  $htmlarg=$htmlarg.'<tbody>
		<tr>
		<td>'.$data['data'][$i]['StationName'].'</td>
		<td>Dry-bulb temperature</td>		
		<td>'.$data['data'][$i]['Dry_Bulb'].'</td>
		<td>°C</td>
		<tr>
		<tr>
		<td></td>
		<td>Wet-bulb temperature</td>		
		<td>'.$data['data'][$i]['Wet_Bulb'].'</td>
		<td>°C</td>		
		</tr>
		
		<tr>
		<td></td>
		<td>Rainfall</td>		
		<td>'.$data['data'][$i]['Rainfall'].'</td>
		<td>mm</td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Visibility</td>		
		<td>'.$data['data'][$i]['Visibility'].'</td>	
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Wind speed</td>		
		<td>'. $data['data'][$i]['Wind_Speed'].'</td>
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Wind direction</td>		
		<td>'. $data['data'][$i]['Wet_Bulb'].'</td>
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Wind direction</td>		
		<td>'. $data['data'][$i]['Wind_Direction'].'</td>
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Maximum Read</td>		
		<td>'. $data['data'][$i]['Max_Read'].'</td>
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Minimum Read</td>		
		<td>'. $data['data'][$i]['Min_Read'].'</td>
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Maximum Reset</td>		
		<td>'. $data['data'][$i]['Max_Reset'].'</td>
		<td></td>	
		</tr>
		
		<tr>
		<td></td>
		<td>Minimum Reset</td>		
		<td>'. $data['data'][$i]['Min_Reset'].'</td>
		<td></td>	
		</tr>';
	 }
		$htmlarg=$htmlarg.'</tbody></table>';


$sid = "ACfdc4672760a06fe30b774d2a2b98c166";// Your Account SID from www.twilio.com/console
$token = "a5f39d83caf76917029ce169239e1191"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '+256'.$receiver, // Text this number
  array(
    'from' => '+17247172495', // From a valid Twilio number
    'body' => 'weather'.$htmlarg
	
  )
);
?>
