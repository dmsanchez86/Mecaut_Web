<?php

class Controller{

	private $path = 'localhost/Mecaut/public/';
	
	function index($app){
		$query = Home::all();
		$dataAccounts = array();
       
		foreach($query as $current_item){
			$dataAccounts[] = $current_item->attributes();
		}
       
		echo json_encode($dataAccounts);

		$data = array(
				'title' => "Mecaut - Home",
				'operation' => (5*6),
				'path' => $this->path
			);

        $app->render('header', $data);
        $app->render('home', $data);
        $app->render('footer', $data);
	}

	function register(){
		echo "Register";
	}
}

?>
