<?php
require_once('parissetup.php');
require_once('Location.php');

$waterloo = Model::factory('Location')->where('3ALPHA','WAT')->find_one();

echo $waterloo->NLCDESC;

?>
