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
  		$output = shell_exec( 'cd /home2/zarabits/www/ruffoschool.com && /usr/bin/git pull');
  		
			echo 'Output: ';
			print($output);
		}
		else{
			echo "No permitido";
		}
	}
}