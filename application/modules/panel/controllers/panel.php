<?php
class Panel extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->user->userArea();
		
		requirePermission("view");
	}

	public function index()
	{
		$this->template->setTitle('Server Panel');
		$page = $this->template->loadPage("panel.tpl", array());
		$this->template->view($page);
	}
}