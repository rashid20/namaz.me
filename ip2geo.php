<?php
// this compresses the page :)
ob_start ("ob_gzhandler");
$ip = $_SERVER['REMOTE_ADDR'];

$data = file_get_contents("http://api.ipinfodb.com/v2/ip_query.php?ip=$ip&output=xml&key=a8ac40c258f4b1b9fecb27de7f091272979de523868d4b804e4b58ac9a0755b2");
 
//Use backup server if cannot make a connection
if (strlen($data) < 1){
?>
{
	"success": 0
}
<?php
        exit(0);
}

$answer = new SimpleXMLElement($data);

$country = trim($answer->CountryName);
$city = trim($answer->City);
$latitude = trim($answer->Latitude);
$longitude = trim($answer->Longitude);

$country = str_replace(" ", "-", $country);
$cookie = $latitude . ":" . $longitude . ":" . ucwords(strtolower($city)) . ":" . ucwords(strtolower($country));

setrawcookie('locInfo', urlencode($cookie), time()+60*60, '/');
setrawcookie('w3clocapisupported','false', time()+60*60, '/');

header ("Content-type: application/json");
?>
{
	"success": 1,
	"countryName": "<?php echo $country;  ?>",
	"cityName": "<?php echo $city; ?>",
	"latitude": "<?php echo $latitude; ?>",
	"longitude": "<?php echo $longitude; ?>"
}
