<?php
/**
 * Gain userpoints for hours worked - a skeletal plugin that might need to get customized according to your needs.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

echo elgg_view_field([
	'#type' => 'number',
	'#label' => elgg_echo('userpoints_balance:hours_worked'),
	'name' => 'params[hours_worked]',
	'required' => true,
	'min' => 1,
	'max' => 10,
	'step' => 1,
]);


echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('userpoints_balance:description'),
	'name' => 'params[description]',
]);

$footer = elgg_view_field([
	'#type' => 'submit',
	'value' => elgg_echo('userpoints_balance:proceed'),
]);

elgg_set_form_footer($footer);
