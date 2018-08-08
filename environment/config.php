<?php
$strLive = FALSE;
$strPageSlider = FALSE;

if($strLive == TRUE) {
 define('ENV_ROOT', 'C:/xampp/htdocs/wwwadogreen/');

 define('ENV_ROOTURL', 'http://localhost/wwwadogreen/');

 define('ENV_RSS', 'https://adogreen.koneqt.com/');
} else {
        // Absolute path to application root folder (must end with a forward slash)
        define('ENV_ROOT', 'C:/xampp/htdocs/wwwadogreen/');

        // URL path to application root folder (must end with a forward slash)
        define('ENV_ROOTURL', 'http://localhost/wwwadogreen/');

        //URL to RSS V2 Server when needed
         define('ENV_RSS', 'https://adogreen.koneqt.com/');
};

//SITE SETTINGS
// Site Title, Description etc
define('ENV_ROBOT', 'index, follow');
define('ENV_TITLE', 'AdoGreen Africa Recruiment | HR | RPO');
define('ENV_KEYWORDS', 'Africa Recruitment | HRO | RPO | Jobs | Heavy Engineering | Power / Energy | Building Construction | Civil Roads Waterworks | Finance');
define('ENV_DESCRIPTION', 'AdoGreen Africa Recruitment | HRO | RPO & Jobs, specialists heavy engineering, power/energy, building and construction, civil roads waterworks, finance');
define('ENV_WEBSITE', 'http://www.adogreen.com/');


?>