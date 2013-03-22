<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| White Label Domain Name
|--------------------------------------------------------------------------
|
| This is the domain of your whitelabel
| WITHOUT  the .com,.net:
|
|	yahoo,google,codeigniter
|
*/
$config['whitelabel_domain_name']	= 'whitelabel';



/*
|--------------------------------------------------------------------------
| NetBilling Postback URL
|--------------------------------------------------------------------------
| this is automatically configured based on what you set in the whitelabel_domain_name parameter
| you can change this if you want to use other postback url
|
*/
$config['netbilling_postback_url']	= 'http://processor.'.$config['whitelabel_domain_name'].'.com/netbilling/postback.cgi';

/*
|--------------------------------------------------------------------------
| Epoch Postback URL
|--------------------------------------------------------------------------
| This is where the postback for Epoch.com goes.
| This is automatically configured based on what you had supplied in whitelabel_domain_name parameter
|
*/
$config['epoch_postback_url']	= 'http://processor.'.$config['whitelabel_domain_name'].'.com/paycom/oneclick.php';


/* End of file config.php */
/* Location: ./application/modules/streamate/config/streamate.php */
