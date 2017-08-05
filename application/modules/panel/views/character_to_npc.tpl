{form_open('character_to_npc', 'class="page_form"')}
	<h2>Personaje a NPC</h2>
	<table style="width:80%">
		<tr>
			<td><label for="character_to_npc_name">Nombre del Personaje:</label></td>
			<td>
				<input type="text" name="character_to_npc_name" id="character_to_npc_name" value="{set_value('character_to_npc_name')}" />
			</td>
		</tr>
	</table>
	<center style="margin-bottom:10px;">
		<input type="submit" name="character_to_npc_submit" value="Guardar" />
	</center>
{form_close()}