<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|==========================================================
| Instantiate the Email Class
|==========================================================
|
| It looks to see if a config file exists so that
| parameters can be hard coded
|
*/
$config = array();
if (file_exists(APPPATH.'config/email'.EXT))
{
	include_once(APPPATH.'config/email'.EXT);
}

if ( ! class_exists('_Email'))
{	
	require_once(BASEPATH.'libraries/Email'.EXT);		
}

$obj =& get_instance();
$obj->email = new _Email($config);
$obj->ci_is_loaded[] = 'email';

?>