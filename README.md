apc_tools
=========

This plugin provides tools to help the use of the Alternative PHP Cache (APC).

It provides two features:
 - APC statistics page
 - Button that can be used to flush the APC system cache

The APC setting apc.stat defaults to on, forcing APC to stat (check) scripts
on each request to determine if they have been modified. If a file has been
modified, APC will recompile and cache the new version. On a production server
where the script files rarely change, a significant performance boost can be
achieved by disabled stats.

If the setting is off, APC will have to be forced to recheck files each time
that modifications have been made. This plugin provides an easy way to flush
the caches from the Elgg admin panel.

For detailed documentation on APC, see http://php.net/manual/en/book.apc.php
