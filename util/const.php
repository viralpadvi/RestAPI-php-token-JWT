<?php 
/*security*/
define('SECRET_KEY', 'SECRET_KEY_FOR_YOUR');

/*Data Type*/
define('BOOLEAN', '1');
define('INTEGER', '2');
define('STRING', '3');

/*Error Codes for jwt*/
define('REQUEST_METHOD_NOT_VALID', '100');
define('REQUEST_CONTENTTYPE_NOT_VALID', '101');
define('REQUEST_NOT_VALID', '102');
define('VALIDETE_PARAMETER_REQUIRED', '103');
define('VALIDETE_PARAMETER_DATATYPE', '104');
define('API_NAME_REQUIRED', '105');
define('API_PARAM_REQUIRED', '106');
define('API_DOST_NOT_EXIST', '107');
define('INVALID_USER_PASS', '108');

define('SUCCESS_RESPONSE', '200');

/*Server Errors*/
define('JWT_PROCESSING_ERROR','300');
define('AUTHORIZATION_HEADER_NOT_FOUND', '300');
define('ACCESS_TOKEN_ERRORS', '301');

?>