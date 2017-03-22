# WP API Remove Authorization Header
Plugin which simulates how CGI and Fast-CGI remove the "Authorization" HTTP header on requests. This helps test if 
your WP API authentication method can handle that header being removed.

Currently, activating this plugin should cause the OAuth plugin, Application Passwords, and Basic Auth plugins to not
 authenticate the user properly, unless they use a workaround that places the authentication data into a separate PHP
  global (eg by modifying the .htaccess file); or unless they send the authentization data in a different manner.

## Installing
1. Download the plugin into your plugins directory
2. Enable in the WordPress admin

