<?php

elgg_register_event_handler('init', 'system', 'apc_tools_init');

/**
 * Initialize the plugin
 */
function apc_tools_init() {
	$actions_path = elgg_get_plugins_path() . 'apc_tools/actions/apc_tools/flush.php';
	elgg_register_action('admin/apc/flush', $actions_path, 'admin');

	elgg_register_plugin_hook_handler('register', 'menu:admin_control_panel', 'apc_tools_admin_panel_setup');
}

/**
 * Add APC flush button to the control panel widget
 *
 * @param string         $hook
 * @param string         $type
 * @param ElggMenuItem[] $menu   Array of ElggMenuItem objects
 * @param array          $params Hook parameters
 * @return ElggMenuItem[] $menu   Array of ElggMenuItem objects
 */
function apc_tools_admin_panel_setup($hook, $type, $menu, $params) {
	$menu[] = ElggMenuItem::factory(array(
		'name' => 'flush_apc',
		'text' => elgg_echo('apc_tools:flush'),
		'href' => 'action/admin/apc/flush',
		'is_action' => true,
		'link_class' => 'elgg-button elgg-button-action',
	));

	return $menu;
}