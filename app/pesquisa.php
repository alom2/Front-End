<?php
    require '../vendor/autoload.php';
	
    include 'sessao.php';
	
	$postdata = file_get_contents("php://input");
        $request = $postdata;
        $usuario = $request->nome;
        
	$client = new \Github\Client();
	$repos = $client->api('user')->repositories($usuario);
        echo json_encode($repos);

//        foreach($repos as $repo){
//            
//		if($repo['description'] === NULL){
//			$repo['description'] = "--";
//		}
//		echo $repo['id'].', '.$repo['owner']['login'].', '.$repo['name'].', '.$repo['description'].'<br>';
//   }
	
