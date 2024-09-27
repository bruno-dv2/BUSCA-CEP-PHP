<?php

require_once "vendor/autoload.php";

use bruno\laravel\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('60871640');

print_r($resultado);

?>