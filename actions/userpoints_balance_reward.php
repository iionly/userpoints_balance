<?php
/**
 * Gain userpoints for hours worked - a skeletal plugin that might need to get customized according to your needs.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

// get the form input
$params = (array) get_input('params');
$hours_worked = (int)  $params['hours_worked'];
$description = $params['description'];

//get GUID and name of user who has entered the hours of revisions
$user_guid = elgg_get_logged_in_user_guid();
$username = elgg_get_logged_in_user_entity()->name;

// Add userpoints
$userpoints_balance = $hours_worked * USERPOINTS_PER_HOUR;
if ($description == '') {
	$description = elgg_echo('userpoints_balance:no_description', [$username]);
}

if(!elggx_userpoints_add($user_guid, $userpoints_balance, 'Userpoint Balance: ' . $description)) {
	return elgg_error_response(elgg_echo('userpoints_balance:pointfail'));
}

return elgg_ok_response('', elgg_echo('userpoints_balance:pointsuccess', [$userpoints_balance, $hours_worked]), REFERER);
