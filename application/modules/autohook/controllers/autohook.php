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
			chdir('/home2/zarabits/www/ruffoschool.com');
  		shell_exec( '/usr/bin/git pull' );
		}
		else{
			echo "No permitido";
		}
	}
}