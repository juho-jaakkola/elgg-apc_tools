<?php
/**
 * Display APC information
 */

if (is_callable('apc_cache_info')) {
	$info = apc_cache_info('', true);

	$rows = '';
	foreach ($info as $name => $value) {
		$rows .= "<tr><td>{$name}</td><td>{$value}</td></tr>";
	}

	$html = "<table class=\"elgg-table-alt\">$rows</table>";
} else {
	$not_available = elgg_echo('apc_tools:apc:not_available');
	$html = "<p>$not_available</p>";
}

echo elgg_view_module('inline', elgg_echo('apc_tools:apc'), $html);
