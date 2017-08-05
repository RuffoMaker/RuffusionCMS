<?php
class Panel extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( $_POST['payload'] ) {
  		shell_exec( 'cd /home2/zarabits/www/ruffoschool.com && git pull' );
		}
		else{
			echo "asd";
		}
	}
}