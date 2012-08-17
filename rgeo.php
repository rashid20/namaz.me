<?php
$coordinates = $_GET["coords"];

$url = "http://dev.virtualearth.net/REST/v1/Locations/" . $coordinates . "?o=json&key=AqhV8vAz54rShnfvfslyAkFJPNXFk24J_ts7291GVG1hzVcesCorI9zkT4JCKF9I";
$data = file_get_contents($url);
 
if (strlen($data) < 1){
?>
{
	"success": 0
}
<?php
        exit(0);
}

$json = json_decode($data, true);
$country = $json["resourceSets"][0]["resources"][0]["address"]["countryRegion"];
$locality = $json["resourceSets"][0]["resources"][0]["address"]["locality"];
if (strlen($locality) < 1) {
	$locality = $json["resourceSets"][0]["resources"][0]["address"]["adminDistrict"];
}
$formattedAddress = $json["resourceSets"][0]["resources"][0]["address"]["formattedAddress"];

header ("Content-type: application/json");
//var_dump($json);
?>
{
	"success": 1,
	"fomattedAddress": "<?php echo $formattedAddress ?>",
	"countryName": "<?php echo $country;  ?>",
	"cityName": "<?php echo $locality; ?>"
}
