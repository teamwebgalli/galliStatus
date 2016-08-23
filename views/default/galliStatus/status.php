<?php
/**
 *	Elgg user status
 *	Author : Mohammed Aqeel | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Web	: http://webgalli.com
 *	Skype : 'team.webgalli'
 *	@package User status plugin for Elgg
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */

$user = elgg_extract('entity', $vars, elgg_get_logged_in_user_entity());
$size = elgg_extract('size', $vars, 'medium');

if(!$user or !$size){
	return;
}	

$user_guid = (int) $user->getGUID();

$dbPrefix = elgg_get_config('dbprefix');
$data = get_data_row("SELECT last_action from {$dbPrefix}users_entity WHERE guid = $user_guid");
$last_action = (int) $data->last_action;

$difference = time() - $last_action;

if($difference < 60){
	$title = elgg_echo('gallistatus:online');
	$class = "onlineIcon";
}

echo "<span class='$class' title='$title'></span>";
?>