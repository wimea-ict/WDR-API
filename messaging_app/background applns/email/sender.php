

<?php # Try running this locally.
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

	$connect = new mysqli("localhost","root","","admin");
//check connection
if($connect->connect_error){
	die("Connection Failed : ".$connect->connect_error);
}
	$sql="SELECT * FROM users where EmailStatus=1";
	$query= $connect->query($sql);
	$x=1;
	$receiver;
	while($row= $query->fetch_assoc()){
		$output['data'][] = array(
			$x,
			$receiver=$row['email']
			
		);
		
		$x++;
		
	}
	//echo $receiver;
	//database connection close
	$connect->close();

$apikey = "0f94460318e397281d32e85c3f2dedcc";
	$WeatherData="http://wimea.mak.ac.ug/weatherapi/api/awsCurrentObservations?key=Wkn339SbwwCugskbbofqRYrW9gI06ivoZRjer5NCTWexuxT6x0p9iHDSCEnn";
//$WeatherData = "http://slimapp/api/observations&key";
//$WeatherData = "http://openweathermap.org/data/2.5/weather?lat=0.34&lon=32.58&appid=b6907d289e10d714a6e88b30761fae22";

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
 //die(sizeof($arraydata)."");
 
  $data = json_decode( $goodData,true);
  //echo $data['Station'];
  
//die($data['data'][0]['StationName']);
# Instantiate the client
$mgClient = new Mailgun('key-f391b9edab815e9dd788806f2bbec953');
$domain = "sandbox93dce545bdfc44be9cbd3f4f339622c7.mailgun.org";


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

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
array('from'    => 'wimeawdr@gmail.com',
        'to'      => $receiver,
        'subject' => 'weather data',        
		'html'  => $htmlarg
	
		));
		?>