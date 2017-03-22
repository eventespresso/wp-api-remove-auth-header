<?php
/**
 * Plugin Name: WP API Remove Authorization Header
 * Description: Plugin which simulates how CGI and Fast-CGI remove the "Authorization" HTTP header on requests. This helps test if your WP API authentication method can handle that header being removed.
 * Author: Event Espresso (Mike Nelson)
 * Author URI: https://eventespresso.com
 * Version: 0.1
 */

//ahem-hem, let me begin: remove the PHP auth variables.
//if the header weren't present, these wouldn't have been set.
unset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'], $_SERVER['HTTP_AUTHORIZATION']);