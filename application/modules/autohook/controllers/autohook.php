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

  		exec('git pull https://github.com/RuffoMaker/RuffusionCMS.git', $output);
			foreach ($output as $o) {
			    echo $o . '<br/>';
			}
		}
		else{
			echo "No permitido";
		}
	}
}