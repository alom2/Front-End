<?php
    require '../vendor/autoload.php';
	
    include 'sessao.php';
	
	$usuario = $_POST['usuario'];
	$client = new \Github\Client();
	$repos = $client->api('user')->repositories($usuario);

    foreach($repos as $repo){
		if($repo['description'] === NULL){
			$repo['description'] = "--";
		}
		echo $repo['id'].', '.$repo['owner']['login'].', '.$repo['name'].', '.$repo['description'].'<br>';
	}
	?>