<?php
    
    // Testing Gateway 
    define('AUTHNET_LOGIN', '9JcX5bu2Gm77');
    define('AUTHNET_TRANSKEY', '8ULngZ46Y68a45HQ');
	
    // Production Gateway
    //define('AUTHNET_LOGIN', '86yE5LVUhwpa');
    //define('AUTHNET_TRANSKEY', '839nv5T6Jy2TWq7y');



    if (!function_exists('curl_init'))
    {
        throw new Exception('CURL PHP extension not installed');
    }

    if (!function_exists('simplexml_load_file'))
    {
        throw new Exception('SimpleXML PHP extension not installed');
    }

?>
