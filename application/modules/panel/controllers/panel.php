<?php
class Ucp extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		requirePermission("view");
	}

	public function index()
	{
		$this->load->view("panel");
	}
}