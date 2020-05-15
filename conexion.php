<?php

require_once 'vendor/autoload.php';

use Neoxygen\NeoClient\ClientBuilder;

$client = ClientBuilder::create()
	->addConnection('defaul','http','localhost',7474)
	->build();
