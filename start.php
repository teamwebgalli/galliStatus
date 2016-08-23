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

elgg_register_event_handler('init', 'system', 'galliStatus_init');

function galliStatus_init() {
	elgg_extend_view('admin.css', 'galliStatus/css');
	elgg_extend_view('elgg.css', 'galliStatus/css');
}
