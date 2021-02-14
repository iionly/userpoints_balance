<?php

use Elgg\DefaultPluginBootstrap;

class UserpointsBalanceBootstrap extends DefaultPluginBootstrap {

	public function init() {
		// Show in Menu
		if (elgg_is_logged_in()) {
			elgg_register_menu_item('site', [
				'name' => elgg_echo('userpoints_balance:menu'),
				'text' => elgg_echo('userpoints_balance:menu'),
				'href' => elgg_get_site_url() . 'userpoints_balance/userpoints_balance',
			]);
		}
	}
}
