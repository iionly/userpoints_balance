<?php
/**
 * Gain userpoints for hours worked - a skeletal plugin that might need to get customized according to your needs.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author iionly
 * @copyright iionly
 */

$title = elgg_echo('userpoints_balance:title');
 
// set up breadcrumbs
elgg_push_breadcrumb($title);
 
$content = "<div class='mbm'>" . elgg_echo("userpoints_balance:overview", array(USERPOINTS_PER_HOUR)) . "</div>";

$content .= elgg_view_form('userpoints_balance/userpoints_balance_reward');

$body = elgg_view_layout('content', [
	'filter_override' => '',
	'content' => $content,
	'title' => $title,
]);

// Draw it
echo elgg_view_page($title, $body);
