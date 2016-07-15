<?php
    require '../vendor/autoload.php';
	$client = new \Github\Client();
	$repos = $client->api('alom2')->repositories();

