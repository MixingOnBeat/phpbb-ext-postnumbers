<?php

/**
 *
 * @package phpBB Extension - Post Numbers
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\postnumbers\migrations;

class v1_1_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\kasimi\postnumbers\migrations\v1_1_0');
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('kasimi.postnumbers.version')),
		);
	}
}
