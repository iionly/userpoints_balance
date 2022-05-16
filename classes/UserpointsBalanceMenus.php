<?php

use Elgg\Menu\MenuItems;

class UserpointsBalanceMenus {

	/**
	 * Add a menu item to the site menu
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:site'
	 *
	 * @return void|MenuItems
	 */
	public static function UserpointsBalanceSitemenu(\Elgg\Hook $hook) {
		if (!elgg_is_logged_in()) {
			return;
		}

		$return_value = $hook->getValue();
		$return_value[] = \ElggMenuItem::factory([
			'name' => 'userpoints_balance_menu',
			'text' => elgg_echo('userpoints_balance:menu'),
			'href' => 'userpoints_balance/userpoints_balance',
			'icon' => 'coins',
		]);
		
		return $return_value;
	}
}
