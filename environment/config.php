<?php
$strLive = FALSE;
$strPageSlider = FALSE;

if($strLive == TRUE) {
 define('ENV_ROOT', '/var/www/vhosts/www.adogreen.com/'); 
 
 define('ENV_ROOTURL', 'http://www.adogreen.com/');
 
 define('ENV_RSS', 'https://adogreen.koneqt.com/');
} else {
// Absolute path to application root folder (must end with a forward slash)
define('ENV_ROOT', '/Applications/mappstack-5.6.30-2/apache2/htdocs/phpTraining/');

// URL path to application root folder (must end with a forward slash)
define('ENV_ROOTURL', 'http://localhost:8080/phpTraining/');

//URL to RSS V2 Server when needed
define('ENV_RSS', 'http://localhost:8080/kq-base-v2/web/');
};

//SITE SETTINGS
// Site Title, Description etc
define('ENV_ROBOT', 'index, follow');
define('ENV_TITLE', 'AdoGreen Africa Recruitment & Jobs');
define('ENV_KEYWORDS', 'Africa Recruitment | Jobs | Heavy Engineering | Power / Energy | Building Construction | Civil Roads Waterworks | Finance');
define('ENV_DESCRIPTION', 'AdoGreen Africa Recruitment & Jobs, specialists heavy engineering, power/energy, building and construction, civil roads waterworks, finance');
define('ENV_WEBSITE', 'http://www.adogreen.com/');


?>