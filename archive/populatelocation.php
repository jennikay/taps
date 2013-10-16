<?php
error_reporting(E_ALL);
require_once 'parissetup.php';
require_once 'Location.php';

$json = file_get_contents('/home/jenniward/public_html/taps/CORPUSextract.json');
$data = json_decode($json);
$data = $data->TIPLOCDATA;

foreach ($data as $location)
{
    if ($location->STANOX != ' ' && !(Model::factory('Location')->find_one($location->STANOX))) {
        echo $location->STANOX;
        $newlocation = Model::factory('Location')->create();
        $newlocation->id = $location->STANOX;
        $newlocation->NLCDESC = $location->NLCDESC;
        $newlocation->{'3ALPHA'} = $location->{'3ALPHA'};
        $newlocation->TIPLOC = $location->TIPLOC;
        $newlocation->save(); 
    }
}

?>
