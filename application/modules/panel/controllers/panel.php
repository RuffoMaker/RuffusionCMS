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

	public function character_to_npc(){
		if(count($_POST))
		{
			$this->template->setTitle('POSTED Personaje a NPC');
			$page = $this->template->loadPage("character_to_npc.tpl", array());
			$this->template->view($page);
		}
		else{
			$this->template->setTitle('Personaje a NPC');
			$page = $this->template->loadPage("character_to_npc.tpl", array());
			$this->template->view($page);
		}
	}
}