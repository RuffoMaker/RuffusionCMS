<?php
class Autohook extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( isset($_POST['payload']) && $_POST['payload'] ) {
			echo 'Haciendo pull...';
			echo "\n";
			//print(chdir('/home2/zarabits/www/ruffoschool.com'));
  		if(exec( '/usr/bin/git pull origin master', $output)){
  			echo 'Correcto.';
  		}
  		else{
  			echo 'Error: ';
  			var_dump($output);
  		}
		}
		else{
			echo "No permitido";
		}
	}
}