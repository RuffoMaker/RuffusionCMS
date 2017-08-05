<?php

class character_to_npc_model extends CI_Model
{
	public function add_character_outfits($data)
	{
		$this->db->insert("creature_template_outfits", $data);
	}
}