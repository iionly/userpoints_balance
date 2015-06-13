<?php
/**
 * Gain userpoints for hours worked - a skeletal plugin that might need to get customized according to your needs.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

$action = elgg_get_site_url() . 'action/userpoints_balance/userpoints_balance_reward';

$hours_input = array('1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10);

$form = "<div class='mbm'>" . elgg_echo("userpoints_balance:overview", array(USERPOINTS_PER_HOUR)) . "</div>";

$form .= "<div class='mbm'><label>" . elgg_echo("userpoints_balance:hours_worked") . "</label>";
$form .= elgg_view('input/select', array(
	'name' => "params[hours_worked]",
	'value' => $hours_worked,
	'options_values' => $hours_input,
));
$form .= "</div>";

$form .= "<div class='mbm'><label>" . elgg_echo('userpoints_balance:description') . "</label>";
$form .= elgg_view('input/text', array('name' => "params[description]", 'value' => ''));
$form .= "</div>";

$form .= elgg_view("input/securitytoken");

$form .= elgg_view('input/submit', array('value' => elgg_echo('userpoints_balance:proceed')));
echo elgg_view('input/form', array('action' => $action, 'body' => $form));
