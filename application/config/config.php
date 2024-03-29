<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('America/Sao_Paulo');


$config['base_url'] = 'http://localhost:8888/smartcare/';
$config['index_page'] = 'index.php';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';

$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = TRUE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-@';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = TRUE;
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'd-m-Y H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = 'm8@s05EcYb01';
$config['sess_driver'] = 'database';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 86400; //3600 = 1 HORA
$config['sess_save_path'] = 'ci_session';
$config['sess_match_ip'] = FALSE; //rastreia o ip da sessao
$config['sess_time_to_update'] = 86400;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE; //set $config['cookie_secure'] in config file to FALSE if you're using HTTP.
$config['cookie_httponly'] 	= FALSE;
$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = false;
$config['csrf_token_name'] = 'E4FKDTU7';
$config['csrf_cookie_name'] = 'AVTQE3ZS';
$config['csrf_expire'] = 86400;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array('entrada/retorno');
$config['compress_output'] = FALSE;
$config['time_reference'] = 'America/Sao_Paulo';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';
